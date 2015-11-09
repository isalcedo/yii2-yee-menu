<?php

use yii\db\Migration;
use yii\db\Schema;

class m150719_182533_add_menu_and_links extends Migration
{

    public function up()
    {
        $this->insert('menu_link', ['id' => 'menu', 'menu_id' => 'admin-main-menu', 'image' => 'align-justify', 'order' => 10]);
        $this->insert('menu_link_lang', ['link_id' => 'menu', 'label' => 'Menus', 'language' => 'en' ]);

        $this->insert('menu_link', ['id' => 'menu-link', 'menu_id' => 'admin-main-menu', 'link' => '/menu/link/index', 'parent_id' => 'menu', 'order' => 2]);
        $this->insert('menu_link_lang', ['link_id' => 'menu-link', 'label' => 'Links', 'language' => 'en' ]);
        
        $this->insert('menu_link', ['id' => 'menu-menu', 'menu_id' => 'admin-main-menu', 'link' => '/menu/default/index', 'parent_id' => 'menu', 'order' => 1]);
        $this->insert('menu_link_lang', ['link_id' => 'menu-menu', 'label' => 'Menus', 'language' => 'en' ]);
    }

    public function down()
    {
        $this->delete('menu', ['like', 'id', 'admin-main-menu']);
        $this->delete('menu_link', ['like', 'id', 'menu-menu']);
        $this->delete('menu_link', ['like', 'id', 'menu-link']);
        $this->delete('menu_link', ['like', 'id', 'menu']);
    }
}