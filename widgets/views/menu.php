<?php

use yeesoft\usermanagement\components\GhostNav;

/* @var $this yii\web\View */
?>

<?= $wrapper[0]; ?>

<?php
if ($options !== NULL) {

}
?>

<?=
GhostNav::widget([
    'encodeLabels' => $encodeLabels,
    'dropDownCaret' => $dropDownCaret,
    'options' => $options[0],
    'items' => $items
]);
?>


<?= $wrapper[1]; ?>