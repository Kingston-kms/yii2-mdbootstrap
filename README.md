<p align="center">
  <a href="https://github.com/yiisoft" target="_blank">
    <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
  </a>
  <a href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank">
    <img src="https://mdbootstrap.com/img/Marketing/general/logo/medium/mdb-r.png">
  </a>
</p>

<h1 align="center">Yii2 Extension with Material Design for Bootstrap</h1>

<p align="center">

</p>

# Demo

You can see demo application on http://yii2-mdb-demo.dtkms.ru/

# Packagist
Extension to asset MDB Bootstrap Assets Free in Yii2 Projects

[![Packagist Version (custom server)](https://img.shields.io/packagist/v/kingston-kms/yii2-mdbootstrap?style=plastic)](https://packagist.org/packages/kingston-kms/yii2-mdbootstrap)

# Installation Bootstrap 4

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require kingston-kms/yii2-mdbootstrap:~1
```

or add

```
"kingston-kms/yii2-mdbootstrap": "~1"
```

to the require section of your `composer.json` file.

## Usage

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

# Installation Bootstrap 5

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require kingston-kms/yii2-mdbootstrap:~2
```

or add

```
"kingston-kms/yii2-mdbootstrap": "~2"
```

to the require section of your `composer.json` file.

## Usage

Add use statement in your view file:
```
use kingston\yii2mdbuikit\MdbUiKitAsset;
use kingston\yii2mdbuikit\MdbUiKitPluginAsset;
```
and register assets in view:
```
MdbUiKitAsset::register($this);
MdbUiKitPluginAsset::register($this);
```

Dark Theme
```
use kingston\yii2mdbuikit\MdbUiKitDarkAsset;
```

RTL Version Assets
```
use kingston\yii2mdbuikit\MdbUiKitRtlAsset;
```

Dark RTL Version Assets
```
use kingston\yii2mdbuikit\MdbUiKitDarkRtlAsset;
```
