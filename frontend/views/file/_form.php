<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
;
?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'fileName')->textInput()->label('File name'); ?>
    <?= $form->field($model, 'extension')->textInput()->label('File extension'); ?>
    <?= $form->field( $model, 'body' )->textarea()->label('File content'); ?>
    <?= Html::submitButton('Create new file', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end(); ?>
