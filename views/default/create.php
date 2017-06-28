<?php

/* @var $this yii\web\View */
/* @var $model yeesoft\menu\models\Menu */

$this->title = Yii::t('yee', 'Create {item}', ['item' => Yii::t('yee/menu', 'Menu')]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('yee/menu', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', compact('model')) ?>