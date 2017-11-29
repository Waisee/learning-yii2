<?php

namespace console\controllers;

use yii\helpers\Console;
use console\models\Coworker;
use console\models\Salary;

/**
 * Description of SalaryController
 *
 * @author waise
 */
class SalaryController extends \yii\console\Controller
{
    public function actionSend()
    {
        $coworkers = Coworker::getList();
        
        $count = Salary::sendMail($coworkers);
        
        Console::output("\nEmail sent: {$count}");
    }
}
