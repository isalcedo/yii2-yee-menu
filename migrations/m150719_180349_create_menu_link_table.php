<?php

use yii\db\Migration;
use yii\db\Schema;

class m150719_180349_create_menu_link_table extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }


        $this->createTable('menu_link',
            [
                'id' => Schema::TYPE_STRING . '(64) COLLATE utf8_unicode_ci NOT NULL',
                'menu_id' => Schema::TYPE_STRING . '(64) COLLATE utf8_unicode_ci NOT NULL',
                'link' => Schema::TYPE_STRING . '(255) COLLATE utf8_unicode_ci DEFAULT NULL',
                'label' => Schema::TYPE_STRING . '(255) COLLATE utf8_unicode_ci NOT NULL',
                'parent_id' => Schema::TYPE_STRING . '(64) COLLATE utf8_unicode_ci DEFAULT ""',
                'image' => Schema::TYPE_STRING . '(24) COLLATE utf8_unicode_ci DEFAULT NULL',
                'order' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
            ], $tableOptions);

        $this->addPrimaryKey('pk', 'menu_link', 'id');
        $this->createIndex('link_menu_id', 'menu_link', 'menu_id');
        $this->createIndex('link_parent_id', 'menu_link', 'parent_id');

        $this->addForeignKey('fk_menu_link', 'menu_link', 'menu_id', 'menu',
            'id', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_menu_link', 'menu_link');
        $this->dropTable('post');
    }
}