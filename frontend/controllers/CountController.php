<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Count;

/**
 * Description of CountController
 *
 * @author waise
 */
class CountController extends Controller
    {

    public function actionView()
        {
        $count = Count::getNewsCount();
        return $this->render('index', [
                    'count' => $count,
        ]);
        }

    }
