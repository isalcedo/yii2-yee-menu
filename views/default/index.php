<?php

use webvimark\extensions\GridPageSize\GridPageSize;
use yeesoft\grid\GridView;
use yeesoft\helpers\Html;
use yeesoft\menu\MenuModule;
use yeesoft\models\Menu;
use yeesoft\models\User;
use yeesoft\Yee;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel yeesoft\menu\models\search\SearchMenu */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = MenuModule::t('menu', 'Menus');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <div class="row">
        <div class="col-sm-12">
            <h3 class="lte-hide-title page-title"><?= Html::encode($this->title) ?></h3>
            <?= Html::a(Yee::t('yee', 'Add New'), ['/menu/default/create'], ['class' => 'btn btn-sm btn-primary']) ?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">

            <div class="row">
                <div class="col-sm-12 text-right">
                    <?= GridPageSize::widget(['pjaxId' => 'menu-grid-pjax']) ?>
                </div>
            </div>

            <?php
            Pjax::begin([
                'id' => 'menu-grid-pjax',
            ])
            ?>

            <?= GridView::widget([
                'id' => 'menu-grid',
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'bulkActionOptions' => [
                    'gridId' => 'menu-grid',
                    'actions' => [Url::to(['bulk-delete']) => Yee::t('yee', 'Delete')]
                ],
                'columns' => [
                    ['class' => 'yii\grid\CheckboxColumn', 'options' => ['style' => 'width:10px']],
                    [
                        'class' => 'yeesoft\grid\columns\TitleActionColumn',
                        'controller' => '/menu/default',
                        'title' => function (Menu $model) {
                            if (User::hasPermission('viewMenuLinks')) {
                                return Html::a($model->title, ['/menu/link/index', 'SearchMenuLink[menu_id]' => $model->id], ['data-pjax' => 0]);
                            } else {
                                return Html::a($model->title, ['/menu/default/view', 'id' => $model->id], ['data-pjax' => 0]);
                            }
                        },
                        'buttonsTemplate' => '{update} {delete}',
                    ],
                    'id',
                ],
            ]) ?>

            <?php Pjax::end() ?>
        </div>
    </div>
</div>


