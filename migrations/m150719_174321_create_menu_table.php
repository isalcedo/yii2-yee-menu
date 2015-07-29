<?php

use yii\db\Migration;
use yii\db\Schema;

class m150719_174321_create_menu_table extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('menu',
            [
                'id' => Schema::TYPE_STRING . '(64) COLLATE utf8_unicode_ci NOT NULL',
                'title' => Schema::TYPE_STRING . '(255) COLLATE utf8_unicode_ci NOT NULL',
            ], $tableOptions);

        $this->addPrimaryKey('pk', 'menu', 'id');
    }

    public function down()
    {
        $this->dropTable('menu');
    }
}