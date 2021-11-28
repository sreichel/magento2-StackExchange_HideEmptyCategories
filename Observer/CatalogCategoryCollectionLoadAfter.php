<?php
declare(strict_types=1);

namespace StackExchange\HideEmptyCategories\Observer;

use Magento\Catalog\Model\Category;
use Magento\Catalog\Model\ResourceModel\Category\Collection;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use function array_key_exists;

class CatalogCategoryCollectionLoadAfter implements ObserverInterface
{
    /**
     * @inheritDoc
     */
    public function execute(Observer $observer)
    {
        $visibleCategories = [];

        /** @var Collection $categoryCollection */
        $categoryCollection = $observer->getDataByKey('category_collection');

        /** @var Category $category */
        foreach ($categoryCollection as $category) {
            if ($this->showCategory($category)) {
                $categoryId = $category->getId();
                $visibleCategories[$categoryId] = $categoryId;

                foreach ($category->getParentIds() as $parentId) {
                    $visibleCategories[$parentId] = $parentId;
                }
            }
        }

        foreach ($categoryCollection as $category) {
            if (!array_key_exists($category->getId(), $visibleCategories)) {
                $categoryCollection->removeItemByKey($category->getId());
            }
        }
    }

    /**
     * @param Category $category
     * @return bool
     */
    private function showCategory(Category $category): bool
    {
        return $category->getProductCollection()->count() > 0;
    }
}
