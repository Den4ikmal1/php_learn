<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this -> title = 'Create new file';
$url = Yii::$app -> urlManager -> createUrl( [ 'file/index' ] );
?>
<h1>
    <?= Html::encode( $this -> title ) ?>
</h1>
<div class="files">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
