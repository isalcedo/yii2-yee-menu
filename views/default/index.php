<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yeesoft\grid\GridView;
use yeesoft\menu\models\Menu;
use yeesoft\gridquicklinks\GridQuickLinks;
use yeesoft\usermanagement\components\GhostHtml;
use webvimark\extensions\GridPageSize\GridPageSize;

/* @var $this yii\web\View */
/* @var $searchModel yeesoft\menu\models\search\SearchMenu */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <div class="row">
        <div class="col-sm-12">
            <h3 class="lte-hide-title page-title"><?=  Html::encode($this->title) ?></h3>
            <?=             GhostHtml::a('Add New', ['create'],
                ['class' => 'btn btn-sm btn-primary'])
            ?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">

            <div class="row">
                <div class="col-sm-6">
                    <?=                     GridQuickLinks::widget([
                        'model' => Menu::class,
                        'searchModel' => $searchModel,
                    ])
                    ?>
                </div>

                <div class="col-sm-6 text-right">
                    <?=  GridPageSize::widget(['pjaxId' => 'menu-grid-pjax']) ?>
                </div>
            </div>

            <?php             Pjax::begin([
                'id' => 'menu-grid-pjax',
            ])
            ?>

            <?=             GridView::widget([
                'id' => 'menu-grid',
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,                'bulkActionOptions' => [
                    'gridId' => 'menu-grid',
                ],
                'columns' => [
                    ['class' => 'yii\grid\CheckboxColumn', 'options' => ['style' => 'width:10px']],
                    [
                        'class' => 'yeesoft\grid\columns\TitleActionColumn',
                        'title' => function(Menu $model) {
                        return Html::a($model->id,
                                ['view', 'id' => $model->id], ['data-pjax' => 0]);
                    },
                    ],

            'id',
            'key',
            'title',

                ],
            ]);
            ?>

            <?php  Pjax::end() ?>
        </div>
    </div>
</div>


