<?php

namespace backend\controllers;

use Yii;
use common\models\Author;

class AuthorController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Author();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            return $this->redirect(['book/index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

}
