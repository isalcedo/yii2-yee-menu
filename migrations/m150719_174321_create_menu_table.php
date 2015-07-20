<?php

use yii\db\Schema;
use yii\db\Migration;

class m150719_174321_create_menu_table extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('post',
            [
            'id' => 'pk',
            'author_id' => Schema::TYPE_INTEGER.'(11) NOT NULL',
            'slug' => Schema::TYPE_STRING.'(200) NOT NULL DEFAULT ""',
            'title' => Schema::TYPE_TEXT.' NOT NULL',
            'type' => Schema::TYPE_STRING.'(20) NOT NULL DEFAULT "post" COMMENT "post,page"',
            'status' => Schema::TYPE_INTEGER.'(1) unsigned NOT NULL DEFAULT "0" COMMENT "0-pending,1-published"',
            'comment_status' => Schema::TYPE_INTEGER.'(1) unsigned NOT NULL DEFAULT "1" COMMENT "0-closed,1-open"',
            'content' => Schema::TYPE_TEXT.' NOT NULL',
            'published_at' => Schema::TYPE_INTEGER.' DEFAULT NULL',
            'created_at' => Schema::TYPE_INTEGER.' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER.' NOT NULL',
            'revision' => Schema::TYPE_INTEGER.' NOT NULL DEFAULT "1"',
            ], $tableOptions);

        $this->createIndex('post_slug', 'post', 'slug');
        $this->createIndex('post_status', 'post', 'status');
        $this->createIndex('post_type', 'post', 'type');
        $this->createIndex('post_type_status', 'post', ['type', 'status']);
        $this->createIndex('post_author', 'post', 'author_id');
    }

    public function down()
    {
        $this->dropTable('post');
    }
}