<?php
namespace kingston\yii2mdbuikit;

use yii\web\AssetBundle;

class MdbUiKitDarkAsset extends AssetBundle
{
    public $sourcePath = '@npm/mdb-ui-kit';
    public $css = [
        'css/mdb.dark.min.css',
    ];
    public $depends = [
        'yii\bootstrap5\BootstrapAsset',
    ];
}
