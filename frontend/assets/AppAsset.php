<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@frontend/assets';

    public $css = [
        'layui/css/layui.css',
        'css/global.css',
    ];
    public $js = [
        'layui/layui.js'
    ];
    public $depends = [

    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD,   // 这是设置所有js放置的位置
    ];
}
