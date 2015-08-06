<?php

use yeesoft\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model yeesoft\menu\models\Menu */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-view">

    <h3 class="lte-hide-title"><?= Html::encode($this->title) ?></h3>

    <div class="panel panel-default">
        <div class="panel-body">

            <p>
                <?=
                Html::a('Edit', ['update', 'id' => $model->id],
                    ['class' => 'btn btn-sm btn-primary'])
                ?>
                <?=
                Html::a('Delete', ['delete', 'id' => $model->id],
                    [
                        'class' => 'btn btn-sm btn-default',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ])
                ?>
                <?=
                Html::a('Add New', ['create'],
                    ['class' => 'btn btn-sm btn-primary pull-right'])
                ?>
            </p>


            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'title',
                ],
            ])
            ?>

        </div>
    </div>

</div>
