<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class SliderAsset extends AssetBundle
{
    public $css = [
        'css/slider/style.css',
    ];
    
    public $js = [
        'js/nivo-slider/jquery.nivo.slider.js',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
