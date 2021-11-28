# Magento2: Hide Empty Categories

[![Latest Stable Version](http://poser.pugx.org/mse-sv3n/m2-hide-empty-categories/v)](https://packagist.org/packages/mse-sv3n/m2-hide-empty-categories)
[![Total Downloads](http://poser.pugx.org/mse-sv3n/m2-hide-empty-categories/downloads)](https://packagist.org/packages/mse-sv3n/m2-hide-empty-categories)
[![Latest Unstable Version](http://poser.pugx.org/mse-sv3n/m2-hide-empty-categories/v/unstable)](https://packagist.org/packages/mse-sv3n/m2-hide-empty-categories)
[![License](http://poser.pugx.org/mse-sv3n/m2-hide-empty-categories/license)](https://packagist.org/packages/mse-sv3n/m2-hide-empty-categories)
[![PHP Version Require](http://poser.pugx.org/mse-sv3n/m2-hide-empty-categories/require/php)](https://packagist.org/packages/mse-sv3n/m2-hide-empty-categories)
[![Support](https://img.shields.io/badge/paypal-donate-lightblue.svg?logo=paypal)](https://www.paypal.me/sv3n1)

> I'm in the final stages of setting up my magento 2 store. In the backend I have a process using the API to keep stock information up to date. Sometimes the stock drops to 0 for every item in a category, making it empty. If you go to one of those categories you get:
>
> `We can't find products matching the selection.`
> 
> This makes sense, but I was wondering if there was a may to have magento hide the category altogether if the products in the category have no stock.

**Source:** https://magento.stackexchange.com/questions/229481/how-to-hide-empty-categories-in-magento2

## Installation

```
composer require mse-sv3n/m2-hide-empty-categories
bin/magento setup:upgrade
```

## Support
If you have any issues with this extension, open an issue on [GitHub](https://github.com/sreichel/magento2-StackExchange_HideEmptyCategories/issues).

## Contribution
Any contribution is highly appreciated. The best way to contribute code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

## License
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)