<?php

/* @var $this yii\web\View */
/* @var $model yeesoft\models\MenuLink */

$this->title = Yii::t('yee/menu', 'Update Menu Link');
$this->params['breadcrumbs'][] = ['label' => Yii::t('yee/menu', 'Menus'), 'url' => ['/menu/default/index']];
$this->params['breadcrumbs'][] = ['label' => $model->menu->title, 'url' => ['default/index', "menu_id" => $model->menu_id]];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', compact('model')) ?>
