<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class Employee extends Model
{

    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';

    public $firstName;
    public $lastName;
    public $middleName = null;
    public $salary;
    public $email;
    public $birthDate = null;
    public $startDate;
    public $city;
    public $position;
    public $id;

    public function scenarios()
    {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'lastName', 'middleName',
                'email', 'birthDate', 'startDate', 'city', 'position', 'id'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'lastName', 'middleName'],
        ];
    }

    public function rules()
    {
        return [
            [['firstName', 'lastName', 'email', 'startDate', 'position', 'id'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['email'], 'email'],
            [['birthDate', 'startDate'], 'date', 'format' => 'php:Y-m-d'],
            [['city'], 'integer'],
            [['position'], 'string'],
            [['id'], 'string', 'min' => 10],
            [['middleName'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE],
        ];
    }
    
    public function save()
    {
        $sql = "INSERT INTO employee (firstname, lastname, middlename, email, birthdate, "
                . "startdate, city, position, id ) "
                . "VALUES ('$this->firstName', '{$this->lastName}', '{$this->middleName}', "
                . "'{$this->email}', '{$this->birthDate}', '{$this->startDate}', "
                . "{$this->city}, '{$this->position}', '{$this->id}')";
        return Yii::$app->db->createCommand($sql)->execute();
    }

}
