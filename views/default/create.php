<?php

use yeesoft\menu\MenuModule;
use yeesoft\Yee;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model yeesoft\menu\models\Menu */

$this->title = Yee::t('yee', 'Create {item}', ['item' => MenuModule::t('menu', 'Menu')]);
$this->params['breadcrumbs'][] = ['label' => MenuModule::t('menu', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="menu-create">
    <h3 class="lte-hide-title"><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', compact('model')) ?>
</div>