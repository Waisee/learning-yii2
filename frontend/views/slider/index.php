<?php
/* @var $this yii\web\View */

use frontend\assets\SliderAsset;

SliderAsset::register($this);
$this->registerJsFile('@web/js/slider/scripts.js', ['depends' => [
        SliderAsset::className()
]]);
?>

<h1>Slider</h1>

<div id="slider" class="nivoSlider">     
    <img src="/files/photos/watch.jpg" />    
    <img src="/files/photos/surf.jpg" />     
    <img src="/files/photos/burger.jpg" />     
    <img src="/files/photos/subway.jpg" /> 
    <img src="/files/photos/trees.jpg" /> 
    <img src="/files/photos/salad.jpg" /> 
    <img src="/files/photos/wine.jpg"/> 
    <img src="/files/photos/coffee.jpg" /> 
</div> 
