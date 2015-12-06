<?php

use yii\db\Migration;

class m150719_182533_add_menu_and_links extends Migration
{

    public function up()
    {
        $this->insert('menu_link', ['id' => 'menu', 'menu_id' => 'admin-menu', 'image' => 'align-justify', 'created_by' => 1, 'order' => 10]);
        $this->insert('menu_link_lang', ['link_id' => 'menu', 'label' => 'Menus', 'language' => 'en']);

        $this->insert('menu_link', ['id' => 'menu-link', 'menu_id' => 'admin-menu', 'link' => '/menu/link/index', 'parent_id' => 'menu', 'created_by' => 1, 'order' => 2]);
        $this->insert('menu_link_lang', ['link_id' => 'menu-link', 'label' => 'Links', 'language' => 'en']);

        $this->insert('menu_link', ['id' => 'menu-menu', 'menu_id' => 'admin-menu', 'link' => '/menu/default/index', 'parent_id' => 'menu', 'created_by' => 1, 'order' => 1]);
        $this->insert('menu_link_lang', ['link_id' => 'menu-menu', 'label' => 'Menus', 'language' => 'en']);
    }

    public function down()
    {
        $this->delete('menu', ['like', 'id', 'admin-menu']);
        $this->delete('menu_link', ['like', 'id', 'menu-menu']);
        $this->delete('menu_link', ['like', 'id', 'menu-link']);
        $this->delete('menu_link', ['like', 'id', 'menu']);
    }
}