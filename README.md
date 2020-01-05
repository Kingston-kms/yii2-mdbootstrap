# yii2-mdbootstrap
Extension to asset MDBootstrap Free with Bootstrap 4 in Yii2 Projects

[![Packagist Version (custom server)](https://img.shields.io/packagist/v/kingston-kms/yii2-mdbootstrap?style=plastic)](https://packagist.org/packages/kingston-kms/yii2-mdbootstrap)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require kingston-kms/yii2-mdbootstrap
```

or add

```
"kingston-kms/yii2-mdbootstrap": "*"
```

to the require section of your `composer.json` file.

Usage
----

Add use statement in your view file:
```
use kingston\mdbootstrap\MDBootstrapAsset;
use kingston\mdbootstrap\MDBootstrapPluginAsset;
```
and register assets in view:
```
MDBootstrapAsset::register($this);
MDBootstrapPluginAsset::register($this);
```
