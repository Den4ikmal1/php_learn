<?php

use yii\helpers\Html;
$this -> title = $model -> fileName;
?>

<h1>
    <?= Html::encode( $this -> title ) ?>
</h1>

<div class="files">

    <div class="files-row">
        <?= $model -> fileContent; ?>
    </div>

</div>
