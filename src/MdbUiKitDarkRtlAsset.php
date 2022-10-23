<?php
namespace kingston\yii2mdbuikit;

use yii\web\AssetBundle;

class MdbUiKitDarkRtlAsset extends AssetBundle
{
    public $sourcePath = '@npm/mdb-ui-kit';
    public $css = [
        'css/mdb.dark.rtl.min.css',
    ];
    public $depends = [
        'yii\bootstrap5\BootstrapAsset',
    ];
}
