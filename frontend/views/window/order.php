<?php
/* @var $model frontend\models\WindowsOrder */

if ($model->hasErrors())
{
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>
<h1>Please, fill in the form</h1>

<form method="post">
    <p>Width:</p>
    <input name="width" type="text" />
    <br><br>

    <p>Height:</p>
    <input name="height" type="text" />
    <br><br>

    <p>Number of chambers:</p>
    <input name="chambers" type="radio" value="1" /> 1
    <input name="chambers" type="radio" value="2" /> 2
    <input name="chambers" type="radio" value="3" /> 3
    <br><br>
    
    <p>Number of flaps:</p>
    <input name="flaps" type="text" />
    <br><br>
    
    <p>Number of swivel flaps:</p>
    <input name="swivel" type="text" />
    <br><br>
    
    <p>Color:</p>
    <select name="color">
        <option value="red">Red</option>
        <option value="green">Green</option>
        <option value="white">White</option>
        <option value="black">Black</option>
    </select>
    <br><br>
    
    <p>Windows sill:</p>
    <input name="sill" type="checkbox" value="yes"> Yes
    <input name="sill" type="checkbox" value="no"> No   
    <br><br>
    
    <p>Email:</p>
    <input name="email" type="text" />
    <br><br>

    <p>Name:</p>
    <input name="name" type="text" />
    <br><br>

    <input type="submit" />
</form>