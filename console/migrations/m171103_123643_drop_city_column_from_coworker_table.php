<?php

use yii\db\Migration;

/**
 * Handles dropping salary from table `coworker`.
 */
class m171103_123643_drop_city_column_from_coworker_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('coworker', 'city');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('coworker', 'city', $this->string(255));
    }
}
