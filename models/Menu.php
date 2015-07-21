<?php

namespace yeesoft\menu\models;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "menu".
 *
 * @property string $id
 * @property string $title
 *
 * @property MenuLink[] $menuLinks
 */
class Menu extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title'], 'required'],
            [['id'], 'string', 'max' => 64],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLinks()
    {
        return $this->hasMany(MenuLink::className(), ['menu_id' => 'id']);
    }

    /**
     * get list of menus
     * @return array
     */
    public static function getList()
    {
        return ArrayHelper::map(self::find()->asArray()->all(), 'id', 'title');
    }
}