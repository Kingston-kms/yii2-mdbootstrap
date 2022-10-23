<p align="center">
  <a href="https://github.com/yiisoft" target="_blank">
    <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
  </a>
  <a href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank">
    <img src="https://mdbootstrap.com/img/Marketing/general/logo/medium/mdb-r.png">
  </a>
</p>

<h1 align="center">Yii2 Extension with Material Design for Bootstrap 5</h1>

<p align="center">

</p>

# yii2-mdb-ui-kit
Extension to asset MDBootstrap Free with Bootstrap 5 in Yii2 Projects

[![Packagist Version (custom server)](https://img.shields.io/packagist/v/kingston-kms/yii2-mdb-ui-kit?style=plastic)](https://packagist.org/packages/kingston-kms/yii2-mdb-ui-kit)

Demo
----
You can see demo application on http://yii2-mdb-ui-kit.dtkms.ru/

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require kingston-kms/yii2-mdb-ui-kit
```

or add

```
"kingston-kms/yii2-mdb-ui-kit": "*"
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
