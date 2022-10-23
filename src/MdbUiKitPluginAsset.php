<?php
namespace kingston\yii2mdbuikit;

use yii\web\AssetBundle;

class MdbUiKitPluginAsset extends AssetBundle
{
    public $sourcePath = '@npm/mdb-ui-kit';
    public $js = [
        'js/mdb.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
    ];
}
