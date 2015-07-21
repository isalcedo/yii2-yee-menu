<?php

namespace yeesoft\menu\widgets;

use yeesoft\menu\models\Menu as MenuModel;
use yeesoft\menu\components\MenuHelper;

class Menu extends \yii\base\Widget
{
    public $id;
    public $wrapper      = ['', ''];
    public $options;
    public $encodeLabels = false;
    public $dropDownCaret;
    public $items;

    public function run()
    {

        $items = [];
        $links = MenuModel::findOne('admin-main-menu')
                ->getLinks()
                ->orderBy(['parent_id' => 'ACS', 'order' => 'ACS'])
                ->asArray()->all();

        foreach ($links as $link) {
            if (empty($link['parent_id'])) {
                $items[$link['id']] = [
                    'label' => MenuHelper::generateIcon($link['image']).' '.$link['label'],
                    'url' => [$link['link']],
                ];
            } else {
                $item = [
                    'label' => MenuHelper::generateIcon($link['image']).' '.$link['label'],
                    'url' => [$link['link']],
                ];

                $items[$link['parent_id']]['items'][] = $item;
            }
        }

        $this->items = $items;

        return $this->render('menu', get_object_vars($this));
    }
}