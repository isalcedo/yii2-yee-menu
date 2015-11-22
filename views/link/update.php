<?php

use yii\helpers\Html;
use yeesoft\menu\MenuModule;

/* @var $this yii\web\View */
/* @var $model yeesoft\models\MenuLink */

$this->title = Yii::t('yee/menu', 'Update Menu Link');
$this->params['breadcrumbs'][] = ['label' => Yii::t('yee/menu', 'Menus'), 'url' => ['/menu/default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('yee/menu', 'Menu Links'), 'url' => ['/menu/link/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-link-update">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', compact('model')) ?>
</div>
