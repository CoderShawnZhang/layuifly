<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@backend/assets';

    public $css = [
        'layui/css/layui.css',
        'css/main.css',
    ];
    public $js = [
        'layui/layui.js',
        'js/tabExtend.js',
        'js/nav.js',
        'js/main.js'
    ];
    public $depends = [

    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD,   // 这是设置所有js放置的位置
    ];
}
