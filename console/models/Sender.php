<?php

namespace console\models;

use Yii;
/**
 * @author waise
 */
class Sender
{
    /**
     * Send emails to subscribers with contents of news
     * @param array $subscribers
     * @param array $newsList
     */
    public static function run($subscribers, $newsList)
    {
        foreach ($subscribers as $subscriber)
        {
            $viewData = ['newsList' => $newsList];
            
            $count = 0;
            
            $result = Yii::$app->mailer->compose('/mailer/newslist', $viewData)
                    ->setFrom('waisee@bk.ru')
                    ->setTo($subscriber['email'])
                    ->setSubject('Тема сообщения')
                    ->send();
            if($result){
                $count++;
            }
        }
        return $count;
    }

}
