<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace common\components;

use Yii;
use yii\base\Component;
use common\components\UserNotificationInterface;


/**
 * Description of EmailService
 *
 * @author waise
 */
class EmailService extends Component
{
    /**
     * @param UserNotificationInterface $user
     * @param string $subject
     * @return bool
     */
    public function notifyUser(UserNotificationInterface $event)
    {
        return Yii::$app->mailer->compose()
            ->setFrom('waisee@bk.ru')
            ->setTo($event->getEmail())
            ->setSubject($event->getSubject())
            ->send();
    }
    /**
     * @param UserNotificationInterface $event
     * @return bool
     */
    public function notifyAdmins(UserNotificationInterface $event)
    {
        return Yii::$app->mailer->compose()
            ->setFrom('waisee@bk.ru')
            ->setTo('waisee7@gmail.com')
            ->setSubject($event->getSubject())
            ->send();
    }
}
