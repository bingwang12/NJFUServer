<?php

namespace app\controllers;
use Yii;
class IndexController extends \yii\web\Controller
{

    public function actionIndex()
    {
    	//echo Yii::$app->request->baseUrl;die();
        return $this->renderpartial('index');
    }

}
