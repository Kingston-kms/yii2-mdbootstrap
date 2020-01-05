<?php
namespace kingston\mdbootstrap;

use yii\web\AssetBundle;


class MDBootstrapPluginAsset extends AssetBundle
{
    public $sourcePath = '@npm/mdbootstrap';
    public $js = [
        'js/mdb.min.js',
        'js/popper.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}
