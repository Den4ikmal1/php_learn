<?php

    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use yii\widgets\ActiveForm;

    $this -> title = 'Calculator';

?>

<h1>
    <?= Html::encode( $this -> title ) ?>
</h1>
<div class="calculator">

    <?php $form = ActiveForm::begin(); ?>

        <div class="calculator-row">
            <?= $form -> field( $model, 'valueA' ) -> textInput(); ?>
        </div>

        <?php
            echo Html::activeDropDownList($model, 'operation', ['0' => '+', '1' => '-', '2' => '*', '3' => '/']);
        ?>

        <div class="calculator-row">
            <?= $form -> field( $model, 'valueB' ) -> textInput(); ?>
        </div>

        <div class="calculator-row">
            <?= Html::submitButton( 'Calculate', [ 'class' => 'btn btn-primary' ] ) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>