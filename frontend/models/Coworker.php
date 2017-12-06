<?php

namespace frontend\models;

use Yii;

/**
 * @author waise
 */
class Coworker
{

    /**
     * Return all coworkers
     * @return array
     */
    public static function getList($max)
    {
        $max = intval($max);
        $sql = 'SELECT * FROM coworker ORDER BY salary DESC LIMIT ' . $max;
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

}
