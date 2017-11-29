<?php

namespace console\models;

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
    public static function getList()
    {
        $sql = 'SELECT * FROM coworker';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}
