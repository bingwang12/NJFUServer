<?php

namespace app\controllers;

class RecordController extends \yii\web\Controller
{
    public function actionRecord($id,$time)
    {
		//echo "hello";
		$request = \Yii::$app->request;
		$id = $request->get("id"); 
		$time = $request->get("time");
		echo $id." ".$time;
        //return $this->render('record');
    }

}
