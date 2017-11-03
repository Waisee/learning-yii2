<?php

use yii\db\Migration;

class m171103_122611_addColumnSalary extends Migration
{
    public function up()
    {
        $this->addColumn('coworker', 'salary', $this->integer());
    }

    public function down()
    {
        $this->dropColumn('coworker', 'salary');
    }
}
