<?php

namespace app\controllers;
/**
* @author WangBing
*/
use Yii;
use app\models\Record;

class RecordController extends \yii\web\Controller
{
  /**
  * $id,$time,$scret获取到的学号，时间，验证
  *
  */
    public function actionRecord($id,$time,$scret)
    {

      $scret1=base64_encode($id.$time);//本地获取验证
      if($scret1==$scret){//对比验证
        Yii::$app->db->createCommand()->insert('Record', [
              'Record_ID' => (count(Yii::$app->db->createCommand('SELECT * FROM Record')->queryAll())+1),
              'ID' => $id,
 		          'Time' => $time,
 		          'Synced' => 0,
            ])->execute(); //执行数据库插入
        //创建一个自定义数据库连接
        if(Yii::$app->db->createCommand('SELECT * FROM StudentRecord WHERE ID='.$id)->execute()==0){//查询是否是第一次跑操记录
          Yii::$app->db->createCommand()->insert('StudentRecord', [
              'ID' => $id,
              'Score' => 1,
              'LastRecord' => $time,
            ])->execute(); //插入数据库
        }else{
	      Yii::$app->db->createCommand('UPDATE StudentRecord SET Score=Score+1,LastRecord='.$time.'  WHERE ID='.$id)->execute();//插入数据库
        echo "成功";//返回response
      }
      }else{
        echo '错误';//返回response
     }
    }

}
