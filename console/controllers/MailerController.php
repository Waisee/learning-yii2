<?php

namespace console\controllers;

use Yii;
/**
 * Description of newPHPClass
 *
 * @author waise
 */
class MailerController extends \yii\console\Controller
{

    public function actionSend()
    {
        $result = Yii::$app->mailer->compose()
                ->setFrom('waisee@bk.ru')
                ->setTo('waisee7@gmail.com')
                ->setSubject('Тема сообщения')
                ->setTextBody('Текст сообщения')
                ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
                ->send();
        var_dump($result);
        die;
    }
}   