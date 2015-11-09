<?php

use yii\helpers\Html;
use yeesoft\Yee;
use yeesoft\menu\MenuModule;

/* @var $this yii\web\View */
/* @var $model yeesoft\menu\models\Menu */

$this->title = Yee::t('yee', 'Update "{item}"', ['item'=> $model->title]);
$this->params['breadcrumbs'][] = ['label' => MenuModule::t('menu', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', compact('model')) ?>

</div>
