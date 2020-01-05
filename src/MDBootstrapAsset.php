<?php

namespace yii2\mdbootstrap;

use yii\web\AssetBundle;

class MDBootstrapAsset extends AssetBundle
{
    public $sourcePath = '@npm/mdbootstrap';
    public $css = [
        'css/mdb.css',
    ];
}
