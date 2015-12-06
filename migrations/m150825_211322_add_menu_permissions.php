<?php

use yii\db\Migration;
use yii\db\Schema;

class m150825_211322_add_menu_permissions extends Migration
{

    public function up()
    {

        $this->insert('auth_item_group', ['code' => 'menuManagement', 'name' => 'Menu Management', 'created_at' => '1440180000', 'updated_at' => '1440180000']);

        $this->insert('auth_item', ['name' => '/admin/menu/*', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/default/*', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/default/bulk-delete', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/default/create', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/default/delete', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/default/grid-page-size', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/default/grid-sort', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/default/index', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/default/update', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/default/view', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/link/*', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/link/bulk-delete', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/link/create', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/link/delete', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/link/grid-page-size', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/link/grid-sort', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/link/index', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/link/update', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => '/admin/menu/link/view', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);

        $this->insert('auth_item', ['name' => 'createMenuLinks', 'type' => '2', 'description' => 'Create menu links', 'group_code' => 'menuManagement', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => 'createMenus', 'type' => '2', 'description' => 'Create menus', 'group_code' => 'menuManagement', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => 'deleteMenuLinks', 'type' => '2', 'description' => 'Delete menu links', 'group_code' => 'menuManagement', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => 'deleteMenus', 'type' => '2', 'description' => 'Delete menus', 'group_code' => 'menuManagement', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => 'editMenuLinks', 'type' => '2', 'description' => 'Edit menu links', 'group_code' => 'menuManagement', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => 'editMenus', 'type' => '2', 'description' => 'Edit menus', 'group_code' => 'menuManagement', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => 'viewMenuLinks', 'type' => '2', 'description' => 'View menu links', 'group_code' => 'menuManagement', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => 'viewMenus', 'type' => '2', 'description' => 'View menus', 'group_code' => 'menuManagement', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => 'fullMenuAccess', 'type' => '2', 'description' => 'Manage other users\' menus', 'group_code' => 'menuManagement', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('auth_item', ['name' => 'fullMenuLinkAccess', 'type' => '2', 'description' => 'Manage other users\' menu links', 'group_code' => 'menuManagement', 'created_at' => '1440180000', 'updated_at' => '1440180000']);

        $this->insert('auth_item_child', ['parent' => 'deleteMenus', 'child' => '/admin/menu/default/bulk-delete']);
        $this->insert('auth_item_child', ['parent' => 'createMenus', 'child' => '/admin/menu/default/create']);
        $this->insert('auth_item_child', ['parent' => 'deleteMenus', 'child' => '/admin/menu/default/delete']);
        $this->insert('auth_item_child', ['parent' => 'viewMenus', 'child' => '/admin/menu/default/grid-page-size']);
        $this->insert('auth_item_child', ['parent' => 'viewMenus', 'child' => '/admin/menu/default/grid-sort']);
        $this->insert('auth_item_child', ['parent' => 'viewMenus', 'child' => '/admin/menu/default/index']);
        $this->insert('auth_item_child', ['parent' => 'editMenus', 'child' => '/admin/menu/default/update']);
        $this->insert('auth_item_child', ['parent' => 'viewMenus', 'child' => '/admin/menu/default/view']);
        $this->insert('auth_item_child', ['parent' => 'deleteMenuLinks', 'child' => '/admin/menu/link/bulk-delete']);
        $this->insert('auth_item_child', ['parent' => 'createMenuLinks', 'child' => '/admin/menu/link/create']);
        $this->insert('auth_item_child', ['parent' => 'deleteMenuLinks', 'child' => '/admin/menu/link/delete']);
        $this->insert('auth_item_child', ['parent' => 'viewMenuLinks', 'child' => '/admin/menu/link/grid-page-size']);
        $this->insert('auth_item_child', ['parent' => 'viewMenuLinks', 'child' => '/admin/menu/link/grid-sort']);
        $this->insert('auth_item_child', ['parent' => 'viewMenuLinks', 'child' => '/admin/menu/link/index']);
        $this->insert('auth_item_child', ['parent' => 'editMenuLinks', 'child' => '/admin/menu/link/update']);
        $this->insert('auth_item_child', ['parent' => 'viewMenuLinks', 'child' => '/admin/menu/link/view']);

        $this->insert('auth_item_child', ['parent' => 'createMenuLinks', 'child' => 'viewMenuLinks']);
        $this->insert('auth_item_child', ['parent' => 'deleteMenuLinks', 'child' => 'viewMenuLinks']);
        $this->insert('auth_item_child', ['parent' => 'editMenuLinks', 'child' => 'viewMenuLinks']);
        $this->insert('auth_item_child', ['parent' => 'administrator', 'child' => 'viewMenus']);
        $this->insert('auth_item_child', ['parent' => 'createMenus', 'child' => 'viewMenus']);
        $this->insert('auth_item_child', ['parent' => 'deleteMenus', 'child' => 'viewMenus']);
        $this->insert('auth_item_child', ['parent' => 'editMenus', 'child' => 'viewMenus']);
        $this->insert('auth_item_child', ['parent' => 'viewMenuLinks', 'child' => 'viewMenus']);

        $this->insert('auth_item_child', ['parent' => 'administrator', 'child' => 'createMenuLinks']);
        $this->insert('auth_item_child', ['parent' => 'administrator', 'child' => 'createMenus']);
        $this->insert('auth_item_child', ['parent' => 'administrator', 'child' => 'editMenuLinks']);
        $this->insert('auth_item_child', ['parent' => 'administrator', 'child' => 'editMenus']);
        $this->insert('auth_item_child', ['parent' => 'administrator', 'child' => 'viewMenuLinks']);
        $this->insert('auth_item_child', ['parent' => 'administrator', 'child' => 'fullMenuAccess']);
        $this->insert('auth_item_child', ['parent' => 'administrator', 'child' => 'fullMenuLinkAccess']);
    }

    public function down()
    {

        $this->delete('auth_item_child', ['parent' => 'administrator', 'child' => 'createMenuLinks']);
        $this->delete('auth_item_child', ['parent' => 'administrator', 'child' => 'createMenus']);
        $this->delete('auth_item_child', ['parent' => 'administrator', 'child' => 'editMenuLinks']);
        $this->delete('auth_item_child', ['parent' => 'administrator', 'child' => 'editMenus']);
        $this->delete('auth_item_child', ['parent' => 'administrator', 'child' => 'viewMenuLinks']);

        $this->delete('auth_item_child', ['parent' => 'createMenuLinks', 'child' => 'viewMenuLinks']);
        $this->delete('auth_item_child', ['parent' => 'deleteMenuLinks', 'child' => 'viewMenuLinks']);
        $this->delete('auth_item_child', ['parent' => 'editMenuLinks', 'child' => 'viewMenuLinks']);
        $this->delete('auth_item_child', ['parent' => 'administrator', 'child' => 'viewMenus']);
        $this->delete('auth_item_child', ['parent' => 'createMenus', 'child' => 'viewMenus']);
        $this->delete('auth_item_child', ['parent' => 'deleteMenus', 'child' => 'viewMenus']);
        $this->delete('auth_item_child', ['parent' => 'editMenus', 'child' => 'viewMenus']);
        $this->delete('auth_item_child', ['parent' => 'viewMenuLinks', 'child' => 'viewMenus']);

        $this->delete('auth_item_child', ['parent' => 'deleteMenus', 'child' => '/admin/menu/default/bulk-delete']);
        $this->delete('auth_item_child', ['parent' => 'createMenus', 'child' => '/admin/menu/default/create']);
        $this->delete('auth_item_child', ['parent' => 'deleteMenus', 'child' => '/admin/menu/default/delete']);
        $this->delete('auth_item_child', ['parent' => 'viewMenus', 'child' => '/admin/menu/default/grid-page-size']);
        $this->delete('auth_item_child', ['parent' => 'viewMenus', 'child' => '/admin/menu/default/grid-sort']);
        $this->delete('auth_item_child', ['parent' => 'viewMenus', 'child' => '/admin/menu/default/index']);
        $this->delete('auth_item_child', ['parent' => 'editMenus', 'child' => '/admin/menu/default/update']);
        $this->delete('auth_item_child', ['parent' => 'viewMenus', 'child' => '/admin/menu/default/view']);
        $this->delete('auth_item_child', ['parent' => 'deleteMenuLinks', 'child' => '/admin/menu/link/bulk-delete']);
        $this->delete('auth_item_child', ['parent' => 'createMenuLinks', 'child' => '/admin/menu/link/create']);
        $this->delete('auth_item_child', ['parent' => 'deleteMenuLinks', 'child' => '/admin/menu/link/delete']);
        $this->delete('auth_item_child', ['parent' => 'viewMenuLinks', 'child' => '/admin/menu/link/grid-page-size']);
        $this->delete('auth_item_child', ['parent' => 'viewMenuLinks', 'child' => '/admin/menu/link/grid-sort']);
        $this->delete('auth_item_child', ['parent' => 'viewMenuLinks', 'child' => '/admin/menu/link/index']);
        $this->delete('auth_item_child', ['parent' => 'editMenuLinks', 'child' => '/admin/menu/link/update']);
        $this->delete('auth_item_child', ['parent' => 'viewMenuLinks', 'child' => '/admin/menu/link/view']);

        $this->delete('auth_item', ['name' => '/admin/menu/*']);
        $this->delete('auth_item', ['name' => '/admin/menu/default/*']);
        $this->delete('auth_item', ['name' => '/admin/menu/default/bulk-delete']);
        $this->delete('auth_item', ['name' => '/admin/menu/default/create']);
        $this->delete('auth_item', ['name' => '/admin/menu/default/delete']);
        $this->delete('auth_item', ['name' => '/admin/menu/default/grid-page-size']);
        $this->delete('auth_item', ['name' => '/admin/menu/default/grid-sort']);
        $this->delete('auth_item', ['name' => '/admin/menu/default/index']);
        $this->delete('auth_item', ['name' => '/admin/menu/default/update']);
        $this->delete('auth_item', ['name' => '/admin/menu/default/view']);
        $this->delete('auth_item', ['name' => '/admin/menu/link/*']);
        $this->delete('auth_item', ['name' => '/admin/menu/link/bulk-delete']);
        $this->delete('auth_item', ['name' => '/admin/menu/link/create']);
        $this->delete('auth_item', ['name' => '/admin/menu/link/delete']);
        $this->delete('auth_item', ['name' => '/admin/menu/link/grid-page-size']);
        $this->delete('auth_item', ['name' => '/admin/menu/link/grid-sort']);
        $this->delete('auth_item', ['name' => '/admin/menu/link/index']);
        $this->delete('auth_item', ['name' => '/admin/menu/link/update']);
        $this->delete('auth_item', ['name' => '/admin/menu/link/view']);

        $this->delete('auth_item', ['name' => 'createMenuLinks']);
        $this->delete('auth_item', ['name' => 'createMenus']);
        $this->delete('auth_item', ['name' => 'deleteMenuLinks']);
        $this->delete('auth_item', ['name' => 'deleteMenus']);
        $this->delete('auth_item', ['name' => 'editMenuLinks']);
        $this->delete('auth_item', ['name' => 'editMenus']);
        $this->delete('auth_item', ['name' => 'viewMenuLinks']);
        $this->delete('auth_item', ['name' => 'viewMenus']);
        $this->delete('auth_item', ['name' => 'fullMenuAccess']);
        $this->delete('auth_item', ['name' => 'fullMenuLinkAccess']);

        $this->delete('auth_item_group', ['code' => 'menuManagement']);
    }
}
