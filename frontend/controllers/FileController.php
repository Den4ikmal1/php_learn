<?php

namespace frontend\controllers;

use Yii;
use common\models\File;
use yii\web\Controller;

class FileController extends Controller
{

    public function actionIndex()
    {
        $model = new File();
        return $this->render('index', ['files' => $model->getAllFiles()]);
    }

    public function actionCreate()
    {
        $model = new File();
        if ($model->load(Yii::$app -> request->post()) && $model->createFile()) {
            return $this->redirect('index');
        } else {
            return $this->render('new', ['model' => $model]);
        }
    }

    public function actionUpdate($id)
    {
        $model = new File();
        if (!$model->create($id)) {
            $this->redirect(Yii::$app->urlManager->createUrl('file/index' ));
        }
        if ($model->load(Yii::$app->request->post()) && $model->updateFile()) {
            return $this->redirect('index');
        } else {
            return $this->render('edit', ['model' => $model]);
        }
    }

    public function actionDelete($id)
    {
        $model = new File();
        if ($model->removeFile($id)) {
            return $this->redirect('index');

        }
    }

    public function actionRead($id)
    {
        $model = new File();
        if (!$model->create($id)) {
            $this->redirect(Yii::$app->urlManager->createUrl('file/index'));
        } else {
            return $this->render('show', ['model' => $model]);
        }
    }
}