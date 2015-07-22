<?php

use yeesoft\usermanagement\components\GhostNav;

/* @var $this yii\web\View */
?>

<?= $wrapper[0]; ?>
<?=
GhostNav::widget(compact('encodeLabels', 'dropDownCaret', 'options', 'items'));
?>
<?= $wrapper[1]; ?>