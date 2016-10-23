<?php


use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yiiwebView */
/* @var $searchModel appmodelsDrumsSearch */
/* @var $dataProvider yiidataActiveDataProvider */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="list-items">
        <?php foreach ( $items as $item ):
            $url = Yii::$app -> urlManager -> createUrl( [ 'items/remove', 'id' => $item -> id ] );
            ?>

                <label><?= Html::encode("{$item -> name}") ?></label>
                <?= Html::a('Remove', ['items/remove', 'id' =>$item -> id], ['class' => 'btn btn-danger']) ?>
            <?= Html::a('Update', ['items/update', 'id' =>$item -> id], ['class' => 'btn btn-default']) ?>
        <?php endforeach; ?>
    </div>


</div>