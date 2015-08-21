<?php

use yeesoft\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model yeesoft\models\MenuLink */

$this->title = $model->label;
$this->params['breadcrumbs'][] = ['label' => 'Menu Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-link-view">

    <h3 class="lte-hide-title"><?= Html::encode($this->title) ?></h3>

    <div class="panel panel-default">
        <div class="panel-body">

            <p>
                <?= Html::a('Edit', ['/menu/link/update', 'id' => $model->id], ['class' => 'btn btn-sm btn-primary']) ?>

                <?= Html::a('Delete', ['/menu/link/delete', 'id' => $model->id],
                    [
                        'class' => 'btn btn-sm btn-default',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>

                <?= Html::a('Add New', ['/menu/link/create'], ['class' => 'btn btn-sm btn-primary pull-right']) ?>
            </p>


            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'menu_id',
                    'link',
                    'label',
                    'parent_id',
                    'image',
                    'order',
                ],
            ])
            ?>

        </div>
    </div>

</div>
