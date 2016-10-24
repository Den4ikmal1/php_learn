<?php

use yii\helpers\Html;

$this -> title = 'Calculate';
$url = Yii::$app -> urlManager -> createUrl( [ 'calculator/index' ] );

?>

<h1>
    <?= Html::encode( $this -> title ) ?>
</h1>
<div class="show">

    <div class="row">
        <?php echo 'Answer: ' . $result; ?>
    </div>

</div>