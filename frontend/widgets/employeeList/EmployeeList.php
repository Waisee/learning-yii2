<?php

namespace frontend\widgets\employeeList;

use Yii;
use yii\base\Widget;
use frontend\models\Coworker;

class EmployeeList extends Widget
{
    public $showLimit = null;

    public function run()
    {
        $max = 3;
        if ($this->showLimit)
        {
            $max = $this->showLimit;
        }
        $list = Coworker::getList($max);

        return $this->render('block', [
                    'list' => $list,
        ]);
    }
}
