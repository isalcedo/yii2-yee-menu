<?php

namespace frontend\controllers;

use Yii;
use yeesoft\base\controllers\admin\BaseController;

/**
 * MenuController implements the CRUD actions for Post model.
 */
class DefaultController extends BaseController 
{
    public $modelClass       = 'yeesoft\menu\models\Menu';
    public $modelSearchClass = 'yeesoft\menu\models\search\MenuSearch';

    protected function getRedirectPage($action, $model = null)
    {
        switch ($action) {
            case 'update':
                return ['update', 'id' => $model->id];
                break;
            case 'create':
                return ['update', 'id' => $model->id];
                break;
            default:
                return parent::getRedirectPage($action, $model);
        }
    }
}