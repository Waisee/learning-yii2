<?php

namespace console\controllers;

use Yii;
/**
 * @author waise
 */
class TimeController extends \yii\console\Controller
{
   public function actionSend()
   {
       $time = Yii::$app->formatter->asDate('now', 'php:Y-m-d H:i:s');
       $path = "/var/www/project/frontend/web/log.txt";
       $f = fopen($path, "a");
       $result = file_put_contents($path, $time . "\r\n", FILE_APPEND); 
       echo $result;
   }
}
