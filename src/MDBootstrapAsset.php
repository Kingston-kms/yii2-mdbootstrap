<?php
namespace kingston\mdbootstrap;

use yii\web\AssetBundle;

class MDBootstrapAsset extends AssetBundle
{
    public $sourcePath = '@npm/mdbootstrap';
    public $css = [
        'css/mdb.min.css',
    ];
    public $depends = [
        'yii\bootstrap4\BootstrapAsset',
    ];
}
