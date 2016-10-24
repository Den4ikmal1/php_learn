<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this -> title = $model -> fileName;
?>

<h1>
    <?= Html::encode( $this -> title ) ?>
</h1>
<div class="files">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>