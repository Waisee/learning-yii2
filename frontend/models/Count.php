<?php

namespace frontend\models;

use Yii;

/**
 * Description of Count
 *
 * @author waise
 */
class Count
    {

    public static function getNewsCount()
        {
        $sql = "SELECT COUNT(*) AS total FROM news";
        return Yii::$app->db->createCommand($sql)->queryOne();
        }

    }
