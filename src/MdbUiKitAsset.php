<?php
namespace kingston\yii2mdbuikit;

use yii\web\AssetBundle;

class MdbUiKitAsset extends AssetBundle
{
    public $sourcePath = '@npm/mdb-ui-kit';
    public $css = [
        'css/mdb.min.css',
    ];
    public $depends = [
        'yii\bootstrap5\BootstrapAsset',
    ];
}
