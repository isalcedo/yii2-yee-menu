<?php

namespace yeesoft\menu\controllers;

use yeesoft\controllers\admin\BaseController;
use Yii;

/**
 * MenuLinkController implements the CRUD actions for Post model.
 */
class LinkController extends BaseController
{
    public $modelClass = 'yeesoft\models\MenuLink';
    public $modelSearchClass = 'yeesoft\menu\models\search\SearchMenuLink';

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