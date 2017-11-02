<?php

use yeesoft\db\PermissionsMigration;

class m150825_211322_menu_permissions extends PermissionsMigration
{

    public function safeUp()
    {
        $this->addPermissionsGroup('menu-management', 'Menu Management');

        parent::safeUp();
    }

    public function safeDown()
    {
        parent::safeDown();
        $this->deletePermissionsGroup('menu-management');
    }

    public function getPermissions()
    {
        return [
            'menu-management' => [
                'view-menus' => [
                    'title' => 'View Menus',
                    'roles' => [self::ROLE_ADMIN],
                    'routes' => [
                        ['bundle' => self::ADMIN_BUNDLE, 'controller' => 'menu/default', 'action' => 'index'],
                        ['bundle' => self::ADMIN_BUNDLE, 'controller' => 'menu/default', 'action' => 'view'],
                        ['bundle' => self::ADMIN_BUNDLE, 'controller' => 'menu/default', 'action' => 'grid-sort'],
                        ['bundle' => self::ADMIN_BUNDLE, 'controller' => 'menu/default', 'action' => 'grid-page-size'],
                    ],
                ],
                'update-menus' => [
                    'title' => 'Update Menus',
                    'child' => ['view-menus'],
                    'roles' => [self::ROLE_ADMIN],
                    'routes' => [
                        ['bundle' => self::ADMIN_BUNDLE, 'controller' => 'menu/default', 'action' => 'update'],
                    ],
                ],
                'create-menus' => [
                    'title' => 'Create Menus',
                    'child' => ['view-menus'],
                    'roles' => [self::ROLE_ADMIN],
                    'routes' => [
                        ['bundle' => self::ADMIN_BUNDLE, 'controller' => 'menu/default', 'action' => 'create'],
                    ],
                ],
                'delete-menus' => [
                    'title' => 'Delete Menus',
                    'child' => ['view-menus'],
                    'roles' => [self::ROLE_ADMIN],
                    'routes' => [
                        ['bundle' => self::ADMIN_BUNDLE, 'controller' => 'menu/default', 'action' => 'delete'],
                        ['bundle' => self::ADMIN_BUNDLE, 'controller' => 'menu/default', 'action' => 'bulk-delete'],
                    ],
                ],
                'view-menu-links' => [
                    'title' => 'View Menu Links',
                    'child' => ['view-menus'],
                    'roles' => [self::ROLE_ADMIN],
                    'routes' => [
                        ['bundle' => self::ADMIN_BUNDLE, 'controller' => 'menu/link', 'action' => 'index'],
                        ['bundle' => self::ADMIN_BUNDLE, 'controller' => 'menu/link', 'action' => 'view'],
                        ['bundle' => self::ADMIN_BUNDLE, 'controller' => 'menu/link', 'action' => 'grid-sort'],
                        ['bundle' => self::ADMIN_BUNDLE, 'controller' => 'menu/link', 'action' => 'grid-page-size'],
                    ],
                ],
                'update-menu-links' => [
                    'title' => 'Update Menu Links',
                    'child' => ['view-menus', 'view-menu-links'],
                    'roles' => [self::ROLE_ADMIN],
                    'routes' => [
                        ['bundle' => self::ADMIN_BUNDLE, 'controller' => 'menu/link', 'action' => 'update'],
                    ],
                ],
                'create-menu-links' => [
                    'title' => 'Create Menu Links',
                    'child' => ['view-menus', 'view-menu-links'],
                    'roles' => [self::ROLE_ADMIN],
                    'routes' => [
                        ['bundle' => self::ADMIN_BUNDLE, 'controller' => 'menu/link', 'action' => 'create'],
                    ],
                ],
                'delete-menu-links' => [
                    'title' => 'Delete Menu Links',
                    'child' => ['view-menus', 'view-menu-links'],
                    'roles' => [self::ROLE_ADMIN],
                    'routes' => [
                        ['bundle' => self::ADMIN_BUNDLE, 'controller' => 'menu/link', 'action' => 'delete'],
                        ['bundle' => self::ADMIN_BUNDLE, 'controller' => 'menu/link', 'action' => 'bulk-delete'],
                    ],
                ],
            ],
        ];
    }

}
