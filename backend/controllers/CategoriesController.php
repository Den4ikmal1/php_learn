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
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class CategoriesController extends Controller
{

    public function actionIndex()
    {
        $query = Item::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count()
        ]);

        $items = $query->orderBy('name')
            -> offset($pagination >offset)
            -> limit($pagination -> limit)
            -> all();

        return $this->render('index', [
            'items' => $items,
            'pagination' => $pagination
        ]);
    }

    public function actionRemove()
    {
        $itemId = Yii::$app->request->get('id');
        if (!$itemId) {
            $this->findModel($itemId)->delete();
            return $this->redirect(['index']);
        }
    }

    public function actionCreate()
    {
        $model = new Item();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('new', [
                'model' => $model,
            ]);
        }
    }
}