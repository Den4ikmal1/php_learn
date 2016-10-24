<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use app\models\Calculator;

class CalculatorController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => 'yii\filters\VerbFilter',
                'actions' => [
                    'show' => ['post']
                ]
            ]
        ];
    }

    public function actionIndex()
    {
        $model = new Calculator();

        if ($model->load(Yii::$app->request->post())) {

            return $this->render('show', [
                'model' => $model,
                'result' => $model->calculate()
            ]);

        } else {
            return $this->render('index', ['model' => $model]);
        }
    }
}