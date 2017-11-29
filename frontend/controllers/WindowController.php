<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\WindowOrder;

/**
 * @author waise
 */
class WindowController extends Controller
{

    public function actionOrder()
    {
        $model = new WindowOrder();

        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost)
        {
            $model->attributes = $formData;
            
            if ($model->validate() && $model->save() && $model->mail($formData))
            {
                Yii::$app->session->setFlash('success', 'Order registered!');
            }
        }
        return $this->render('order', [
                    'model' => $model,
        ]);
    }

}
