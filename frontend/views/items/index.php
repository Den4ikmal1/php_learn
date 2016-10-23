<?php


use yii\grid\GridView;
use yii\helpers\Html;


$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="list-items">
        <?php foreach ( $items as $item ):
            $url = Yii::$app -> urlManager -> createUrl( [ 'items/show', 'id' => $item -> id ] );
            ?>

                <label><?= Html::encode("{$item -> name}") ?></label>
            <?= Html::a('Show', ['items/read', 'id' =>$item -> id], ['class' => 'btn btn-default']) ?>
        <?php endforeach; ?>
    </div>
</div>