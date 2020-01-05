<?php
namespace kingston\mdbootstrap;

use yii\web\AssetBundle;


class MDBootstrapPluginAsset extends AssetBundle
{
    public $sourcePath = '@npm/mdbootstrap';
    public $js = [
        'js/mdb.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
