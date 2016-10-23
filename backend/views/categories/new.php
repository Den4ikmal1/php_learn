<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="form">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>