<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 21.10.16
 * Time: 15:19
 */

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Item;

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

    public function actionRead($id)
    {
        return $this->render('show', [
            'model' => $this->findModel($id),
        ]);
    }

    protected function findModel($id)
    {
        return Item::findOne($id);
    }
    
}