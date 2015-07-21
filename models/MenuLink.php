<?php

namespace yeesoft\menu\models;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "menu_link".
 *
 * @property string $id
 * @property string $menu_id
 * @property string $link
 * @property string $label
 * @property string $parent_id
 * @property string $image
 * @property integer $order
 *
 * @property Menu $menu
 */
class MenuLink extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_link';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'menu_id', 'label'], 'required'],
            [['order'], 'integer'],
            [['id', 'menu_id', 'parent_id'], 'string', 'max' => 64],
            [['link', 'label'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_id' => 'Menu',
            'link' => 'Link',
            'label' => 'Label',
            'parent_id' => 'Parent Link',
            'image' => 'Image',
            'order' => 'Order',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['id' => 'menu_id']);
    }

    /**
     * get list of menus
     * @return array
     */
    public function getSiblings()
    {
        $siblings = MenuLink::find()
                ->andWhere(['like', 'menu_id', $this->menu_id])
                ->andWhere(['!=', 'id', $this->id])
                ->asArray()->all();

        $list = ArrayHelper::map(
                $siblings, 'id',
                function ($array, $default) {
                return $array['label'].' ['.$array['id'].']';
            });

        return ArrayHelper::merge([NULL => 'No Parent'], $list);
    }
}