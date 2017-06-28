<?php

/* @var $this yii\web\View */
/* @var $model yeesoft\menu\models\MenuLink */

$this->title = Yii::t('yee/menu', 'Create Menu Link');
$this->params['breadcrumbs'][] = ['label' => Yii::t('yee/menu', 'Menus'), 'url' => ['/menu/default/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', compact('model')) ?>