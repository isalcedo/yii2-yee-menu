<?php

namespace yeesoft\menu\controllers;

use yeesoft\controllers\admin\BaseController;
use Yii;

/**
 * MenuController implements the CRUD actions for Post model.
 */
class DefaultController extends BaseController
{
    public $modelClass = 'yeesoft\models\Menu';
    public $modelSearchClass = 'yeesoft\menu\models\search\SearchMenu';

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