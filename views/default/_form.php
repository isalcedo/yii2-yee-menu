<?php

use yii\widgets\ActiveForm;
use yeesoft\menu\models\Menu;
use yeesoft\usermanagement\components\GhostHtml;

/* @var $this yii\web\View */
/* @var $model yeesoft\menu\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php
	    $form = ActiveForm::begin([
            'id' => 'menu-form',
            'validateOnBlur' => false,
        ])
    ?>

    <div class="row">
        <div class="col-md-9">

            <div class="panel panel-default">
                <div class="panel-body">

                        <?= $form->field($model, 'key')->textInput(['maxlength' => true]) ?>

						<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>


                </div>

            </div>
        </div>

        <div class="col-md-3">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="record-info">
                        <div class="form-group">
                            <label class="control-label" style="float: left; padding-right: 5px;"><?=  $model->attributeLabels()['id'] ?>: </label>
                            <span><?=  $model->id ?></span>
                        </div>

                        <div class="form-group">
                            <?php  if ($model->isNewRecord): ?>
                                <?=                                 GhostHtml::submitButton('<span class="glyphicon glyphicon-plus-sign"></span> Create',
                                    ['class' => 'btn btn-success'])
                                ?>
                                <?=                                 GhostHtml::a('<span class="glyphicon glyphicon-remove"></span> Cancel',
                                    '../post',
                                    [
                                    'class' => 'btn btn-default',
                                ])
                                ?>
                            <?php  else: ?>
                                <?=                                 GhostHtml::submitButton('<span class="glyphicon glyphicon-ok"></span> Save',
                                    ['class' => 'btn btn-primary'])
                                ?>
                                <?=                                 GhostHtml::a('<span class="glyphicon glyphicon-remove"></span> Delete',
                                    ['delete', 'id' => $model->id],
                                    [
                                    'class' => 'btn btn-default',
                                    'data' => [
                                        'confirm' => 'Are you sure you want to delete this item?',
                                        'method' => 'post',
                                    ],
                                ])
                                ?>
                            <?php  endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php  ActiveForm::end(); ?>

</div>
