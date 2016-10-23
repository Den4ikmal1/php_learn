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
use common\models\Category;

class CategoriesController extends Controller
{
    public function actionIndex()
    {
        $query = Category::find();
        $categories = $query->orderBy('name')->all();
        return $this->render('index', [
            'categories' => $categories
        ]);
    }

    public function actionRemove($id)
    {
        if($id && Category::findOne($id)){
            Category::findOne($id)->delete();
            return $this->redirect(['index']);
        }
    }

    public function actionCreate()
    {
        $model = new Category();
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
        $model = Category::findOne($id);
        var_dump($model); die();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('edit', [
                'model' => $model,
            ]);
        }
    }
}