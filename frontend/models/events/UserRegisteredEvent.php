<?php

namespace frontend\models\events;

use yii\base\Event;
use frontend\models\User;
use common\components\UserNotificationInterface;
/**
 * @author waise
 */
class UserRegisteredEvent extends Event implements UserNotificationInterface
{

    /**
     *
     * @var User
     */
    public $user;

    /**
     *
     * @var type string
     */
    public $subject;

    /**
     * @return type string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return type string
     */
    public function getEmail()
    {
        return $this->user->email;
    }

}
