<?php

use yii\helpers\Html;
$this->title = 'Update Item: ' . ' ' . $model->id;
?>
<div class="drums-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>