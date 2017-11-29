<?php

namespace console\models;

use Yii;

/**
 * @author waise
 */
class Salary
{

    public static function sendMail($coworkers)
    {
        $count = 0;
        
        foreach ($coworkers as $coworker)
        {
            $viewData = ['coworker' => $coworker,];

            $result = Yii::$app->mailer->compose('/salary/salarymail', $viewData)
                    ->setFrom('waisee@bk.ru')
                    ->setTo($coworker['email'])
                    ->setSubject('Salary')
                    ->send();
            if ($result)
            {
                $count++;
                
                $message = Yii::$app->formatter->asDate('now', 'php:Y-m-d H:i:s') . ' Отправлено письмо на адрес '. $coworker['email'];
                $path = "/var/www/project/frontend/web/log.txt";
                $f = fopen($path, "a");
                $result = file_put_contents($path, $message . "\r\n", FILE_APPEND);
                fclose($f);
            }
        }
        return $count;
    }

}
