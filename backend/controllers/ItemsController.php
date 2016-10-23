<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 21.10.16
 * Time: 15:19
 */

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Item;
use yii\data\Pagination;



class ItemsController extends Controller
{
    public function actionIndex()
    {
        $query = Item::find();
        $items = $query->orderBy('name')->all();
        return $this->render('index', [
            'items' => $items
        ]);
    }

    public function actionRemove($id)
    {
        if($id && Item::findOne($id)){
            Item::findOne($id)->delete();
            return $this->redirect(['index']);
        }
    }

    public function actionCreate()
    {
        $model = new Item();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('new', [
                'model' => $model,
            ]);
        }
    }


    public function actionUpdate($id)
    {
        $model = Item::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('edit', [
                'model' => $model,
            ]);
        }
    }
}