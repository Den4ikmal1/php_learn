<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this -> title = 'Files';
?>

<h1>
    <?= Html::encode( $this -> title ) ?>
</h1>
<?= Html::a('Create', ['file/create'], ['class' => 'btn btn-info']) ?>
<div class="files">
    <?php foreach($files as $file) :
    ?>
        <div class="files-row">
            <?= Html::a("{$file}", ['file/read', 'id' => $file]) ?>
            <?= Html::a('Remove', ['file/delete', 'id' => $file], ['class' => 'btn btn-danger']) ?>
            <?= Html::a('Update', ['file/update', 'id' =>$file], ['class' => 'btn btn-primary']) ?>
        </div>
    <?php endforeach; ?>
</div>