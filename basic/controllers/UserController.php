<!-- <?php
//var_dump($_GET);
?>
 -->
 <?php

namespace app\controllers;
use Yii;
use app\models\Record;
class UserController extends \yii\web\Controller
{
    public function actionRecord($id,$time)
    {
    //echo "hello";
    //$request = \Yii::$app->request;
    //$id = $request->get("id"); 
    //$time = $request->get("time");
    //$posts = Yii::$app->db->createCommand('SELECT * FROM post')
        //    ->queryAll();
        //return $this->render('record');
      echo $id;
    }

}
