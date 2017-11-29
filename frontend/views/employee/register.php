<?php
/* @var $model frontend\models\Employee */

if ($model->hasErrors())
{
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>
<h1>Welcome to our company!</h1>

<form method="post">
    <p>First name:</p>
    <input name="firstName" type="text" />
    <br><br>

    <p>Last name:</p>
    <input name="lastName" type="text" />
    <br><br>

    <p>Middle name:</p>
    <input name="middleName" type="text" />
    <br><br>

    <p>Email:</p>
    <input name="email" type="text" />
    <br><br>

    <p>Birth date:</p>
    <input name="birthDate" type="text" />
    <br><br>

    <p>Start work date:</p>
    <input name="startDate" type="text" />
    <br><br>

    <p>City:</p>
    <select name="city">
        <option value="1">Уфа</option>
        <option value="2">Москва</option>
        <option value="3">Казань</option>
        <option value="4">Сочи</option>
    </select>
    <br><br>

    <p>Position:</p>
    <input name="position" type="text" />
    <br><br>

    <p>ID:</p>
    <input name="id" type="text" />
    <br><br>

    <input type="submit" />
</form>