<?php


use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yiiwebView */
/* @var $searchModel appmodelsDrumsSearch */
/* @var $dataProvider yiidataActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="list-items">
        <?php foreach ( $categories as $category ):
            $url = Yii::$app -> urlManager -> createUrl( [ 'categories/remove', 'id' => $category -> id ] );
            ?>

                <label><?= Html::encode("{$category -> name}") ?></label>
                <?= Html::a('Remove', ['categories/remove', 'id' => $category -> id], ['class' => 'btn btn-danger']) ?>
            <?= Html::a('Update', ['categories/update', 'id' =>$category -> id], ['class' => 'btn btn-default']) ?>
        <?php endforeach; ?>
    </div>


</div>