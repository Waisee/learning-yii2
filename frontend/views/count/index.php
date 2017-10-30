<?php

use yii\helpers\Url;
?>
<h1>Общее количество новостей в базе данных:</h1>
<p><?php echo $count['total']; ?></p>

<a href="<?php echo Url::to(['test/index']); ?>" class="btn btn-info">Back</a>
