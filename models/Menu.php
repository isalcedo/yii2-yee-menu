<?php

namespace yeesoft\menu\models;

/**
   * This is the model class for table "menu".
   *
   * @property integer $id
   * @property string $key
   * @property string $title
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
            [['key', 'title'], 'required'],
            [['key'], 'string', 'max' => 64],
            [['title'], 'string', 'max' => 255],
            [['key'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key' => 'Key',
            'title' => 'Title',
        ];
    }
}