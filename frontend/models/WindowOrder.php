<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * @author waise
 */
class WindowOrder extends Model
{

//    const SCENARIO_WINDOW_ORDER = 'window_order';

    public $width;
    public $height;
    public $chambers;
    public $flaps;
    public $swivel;
    public $color;
    public $sill;
    public $email;
    public $name;

//    public function scenarios()
//    {
//        return [
//            self::SCENARIO_WINDOW_ORDER => ['weight', 'height', 'chambers',
//                'flaps', 'swivel', 'color', 'sill', 'email', 'name'],
//        ];
//    }

    public function rules()
    {
        return [
            [['width', 'height', 'chambers', 'flaps', 'swivel', 'color', 'sill', 'email', 'name'], 'required'],
            [['width'], 'integer', 'min' => 70, 'max' => 210],
            [['height'], 'integer', 'min' => 100, 'max' => 200],
            [['flaps'], 'integer', 'min' => 1],
            [['swivel'], 'integer',],
            [['swivel'], 'compare', 'compareAttribute' => 'flaps',
                'operator' => '>'],
            [['email'], 'email'],
        ];
    }

    public function save()
    {
        $sql = "INSERT INTO window_order (id , width, height, chambers, flaps, swivel, "
                . "color, sill, email, name ) "
                . "VALUES (null, {$this->width}, {$this->height}, {$this->chambers}, "
                . "{$this->flaps}, {$this->swivel}, '{$this->color}', "
                . "'{$this->sill}', '{$this->email}', '{$this->name}')";
        return Yii::$app->db->createCommand($sql)->execute();
    }

    public function mail($formData)
    {
        $adminEmail = Yii::$app->params['adminEmail'];

        $viewData = ['formData' => $formData,];
        return Yii::$app->mailer->compose('/window/ordermail', $viewData)
                        ->setFrom('waisee@bk.ru')
                        ->setTo($adminEmail)
                        ->setSubject('Order')
                        ->send();
    }
}
