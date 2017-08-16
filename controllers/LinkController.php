<?php

namespace yeesoft\menu\controllers;

use yeesoft\controllers\CrudController;
use yii\helpers\StringHelper;

/**
 * MenuLinkController implements the CRUD actions for Post model.
 */
class LinkController extends CrudController
{
    public $modelClass = 'yeesoft\models\MenuLink';
    public $modelSearchClass = 'yeesoft\menu\models\SearchMenuLink';
    public $enableOnlyActions = ['delete', 'update', 'create'];

    protected function getRedirectPage($action, $model = null)
    {
        switch ($action) {
            case 'delete':
                $searchClass = $this->modelSearchClass;
                $formName = StringHelper::basename($searchClass::className());
                return ['/menu/default/index', "{$formName}[menu_id]" => $model->menu_id];
                break;
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