<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yeesoft\grid\GridView;
use yeesoft\menu\models\MenuLink;
use yeesoft\gridquicklinks\GridQuickLinks;
use yeesoft\usermanagement\components\GhostHtml;
use webvimark\extensions\GridPageSize\GridPageSize;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SearchMenuLink */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title                   = 'Menu Links';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-link-index">

    <div class="row">
        <div class="col-sm-12">
            <h3 class="lte-hide-title page-title"><?= Html::encode($this->title) ?></h3>
            <?=
            GhostHtml::a('Add New', ['create'],
                ['class' => 'btn btn-sm btn-primary'])
            ?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">

            <div class="row">
                <div class="col-sm-12 text-right">
                    <?= GridPageSize::widget(['pjaxId' => 'menu-link-grid-pjax']) ?>
                </div>
            </div>

            <?php
            Pjax::begin([
                'id' => 'menu-link-grid-pjax',
            ])
            ?>

            <?=
            GridView::widget([
                'id' => 'menu-link-grid',
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel, 'bulkActionOptions' => [
                    'gridId' => 'menu-link-grid',
                ],
                'columns' => [
                    ['class' => 'yii\grid\CheckboxColumn', 'options' => ['style' => 'width:10px']],
                    [
                        'class' => 'yeesoft\grid\columns\TitleActionColumn',
                        'attribute' => 'id',
                        'title' => function(MenuLink $model) {
                        return Html::a($model->label,
                                ['view', 'id' => $model->id], ['data-pjax' => 0]);
                    },
                    ],
                    'menu_id',
                    'link',
                    'parent_id',
                    'image',
                    'order',
                ],
            ]);
            ?>

            <?php Pjax::end() ?>
        </div>
    </div>
</div>


