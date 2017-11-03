<?php

use yii\db\Migration;

class m171103_104015_create_tables_coworker extends Migration
{
    public function up()
    {
        $this->createTable('coworker', [
            'name' => $this->string(255),
            'birthdate' => $this->date(),
            'city' => $this->string(255),
            'startwork' => $this->date(),
            'position' => $this->string(255),
            'depart_number' => $this->integer(11),
            'id' => $this->primaryKey(),
            'email' => $this->string(255)->unique(),
        ]);  
    }

    public function down()
    {
        $this->dropTable('coworker');  
    }
}
