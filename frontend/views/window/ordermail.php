<?php /* @var $formData[] array */ ?>
<h1>New order</h1>
<table border="1">
    <?php
    foreach ($formData as $key => $value)
    {
        echo '<tr>';
        echo '<td>'. $key .'</td>';
        echo '<td>'. $value .'</td>';
        echo '</tr>';
    }
    ?>
</table>


