<?php

use yii\db\Migration;

/**
 * Handles the creation of table `subscriber`.
 */
class m171030_213633_create_subscriber_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('subscriber', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('subscriber');
    }
}