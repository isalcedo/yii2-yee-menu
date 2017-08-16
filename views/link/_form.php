<?php

use yeesoft\helpers\Html;
use yeesoft\helpers\FA;
use yeesoft\models\Menu;
use yeesoft\widgets\ActiveForm;
use yeesoft\widgets\LanguagePills;

/* @var $this yii\web\View */
/* @var $model yeesoft\menu\models\MenuLink */
/* @var $form yeesoft\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin() ?>


<div class="row">
    <div class="col-md-9">
        <div class="box box-primary">
            <div class="box-body">
                <?= $form->languageSwitcher($model); ?>

                <?= $form->field($model, 'label')->textInput(['maxlength' => true]) ?>

                <?php if ($model->isNewRecord): ?>
                    <?= $form->field($model, 'id')->slugInput(['maxlength' => true], 'label') ?>
                <?php endif; ?>

                <?php //$form->field($model, 'parent_id')->dropDownList($model->getSiblings(), ['class' => 'clearfix']) ?>



                <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

                <?php // $form->field($model, 'order')->textInput() ?>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="box box-primary">
            <div class="box-body">

                <?php if (!$model->isNewRecord): ?>
                    <?= $form->field($model, 'id')->value() ?>
                <?php endif; ?>

                <?= $form->field($model, 'alwaysVisible')->checkbox() ?>

                <?php if ($model->isNewRecord): ?>
                    <?= $form->field($model, 'menu_id')->dropDownList(Menu::getMenus(), ['class' => 'clearfix form-control']) ?>
                <?php endif; ?>

                <?=
                $form->field($model, 'image')->dropDownList(FA::getIconsList(), [
                    'class' => 'clearfix form-control fa-font-family',
                    'encode' => false,
                ])
                ?>

                <div class="row">
                    <?php if ($model->isNewRecord): ?>
                        <div class="col-md-6">
                            <?= Html::submitButton(Yii::t('yee', 'Create'), ['class' => 'btn btn-primary btn-block']) ?>
                        </div>
                        <div class="col-md-6">
                            <?= Html::a(Yii::t('yee', 'Cancel'), ['index'], ['class' => 'btn btn-default btn-block']) ?>
                        </div>
                    <?php else: ?>
                        <div class="col-md-6">
                            <?= Html::submitButton(Yii::t('yee', 'Save'), ['class' => 'btn btn-primary btn-block']) ?>
                        </div>
                        <div class="col-md-6">
                            <?=
                            Html::a(Yii::t('yee', 'Delete'), ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-default btn-block',
                                'data' => [
                                    'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                    'method' => 'post',
                                ],
                            ])
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>

<?php
$js = <<<JS

    $('#menulink-image-styler ul li').each(function(){
        var glyphicon = $(this).text();
        $(this).addClass('glyphicon').addClass('glyphicon-'+glyphicon).html('');
    });
    $('#menulink-image-styler ul li:first').html('No Icon');

    setTimeout(function(){
       
    },1000);
    

JS;
$this->registerJs($js);
$this->registerCss('.fa-font-family {font-family: FontAwesome;}');
?>