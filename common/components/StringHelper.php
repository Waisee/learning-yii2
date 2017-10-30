<?php

namespace common\components;

use Yii;

/**
 * Description of StringHelper
 *
 * @author waise
 */
class StringHelper
    {

    private $limit;
    private $words;

    public function __construct()
        {
        $this->limit = Yii::$app->params['shortTextLimit'];
        $this->words = Yii::$app->params['shortTextWordsLimit'];
        }

    public function getShort($string, $limit = null)
        {
        if ($limit === null)
            {
            $limit = $this->limit;
            }
        return substr($string, 0, $limit);
        }

    public function getShortBySymbol($string, $limit = null)
        {
        if ($limit === null)
            {
            $limit = $this->limit;
            }
        $pos = strpos($string, " ", $limit);
        return substr($string, 0, $pos);
        }

    public function getShortByWords($string, $words = null)
        {
        if ($words === null)
            {
            $words = $this->words;
            }
        $res = explode(" ", $string);
        for ($i = 0; $i < $words; $i++)
            {
            $result[] = $res[$i];
            }
        return implode(" ", $result);
        }

    }
