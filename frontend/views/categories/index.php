<?php


use yii\grid\GridView;
use yii\helpers\Html;


$this->title = 'categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-index">

    <h1><?= Html::encode($this->title) ?></h1>
        <div class="list-items">
        <?php foreach ( $categories as $category ):
            $url = Yii::$app -> urlManager -> createUrl( [ 'categories/show', 'id' => $category -> id ] );
            ?>

                <label><?= Html::encode("{$category -> name}") ?></label>
           <?= Html::a('Show', ['categories/show', 'id' =>$category -> id], ['class' => 'btn btn-default']) ?>
        <?php endforeach; ?>
    </div>

</div>