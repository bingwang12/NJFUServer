<?php

namespace app\controllers;
use Yii;
use app\models\Record;
class RecordController extends \yii\web\Controller
{
    public function actionRecord($id,$time,$scret)
    {
		//echo "hello";
		//$request = \Yii::$app->request;
		//$id = $request->get("id"); 
		//$time = $request->get("time");
		//$posts = Yii::$app->db->createCommand('SELECT * FROM post')
        //    ->queryAll();
        //return $this->render('record');
      $scret1=base64_encode($id.$time);
      echo $scret1;
      if($scret1==$scret){
        Yii::$app->db->createCommand()->insert('Record', [
              'Record_ID' => (count(Yii::$app->db->createCommand('SELECT * FROM Record')->queryAll())+1),
              'ID' => $id,
 		          'Time' => $time,
 		          'Synced' => 0,
            ])->execute(); 
        //创建一个自定义数据库连接
	      Yii::$app->db->createCommand('UPDATE StudentRecord SET Score=Score+1,LastRecord='.$time.'  WHERE ID='.$id)->execute();
        echo "成功";
      }else{
        echo '错误';
     }
    }

}
