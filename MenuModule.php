<?php

namespace yeesoft\menu;

use Yii;

class MenuModule extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'yeesoft\menu\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->registerTranslations();
    }

    public function registerTranslations()
    {
        Yii::$app->i18n->translations['yii2-yee-menu/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@vendor/yeesoft/yii2-yee-menu/messages',
            'fileMap' => [
                'yii2-yee-menu/menu' => 'menu.php',
            ],
        ];
    }

    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('yii2-yee-menu/' . $category, $message, $params, $language);
    }
}