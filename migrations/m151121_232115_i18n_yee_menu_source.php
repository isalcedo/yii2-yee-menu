<?php

use yeesoft\i18n\SourceMessagesMigration;

class m151121_232115_i18n_yee_menu_source extends SourceMessagesMigration
{

    public function getCategory()
    {
        return 'yee/menu';
    }

    public function getMessages()
    {
        return [
            'Menu' => 1,
            'Menus' => 1,
            'Link ID can only contain lowercase alphanumeric characters, underscores and dashes.' => 1,
            'Parent Link' => 1,
            'Always Visible' => 1,
            'No Parent' => 1,
            'Create Menu Link' => 1,
            'Update Menu Link' => 1,
            'Menu Links' => 1,
        ];
    }
}