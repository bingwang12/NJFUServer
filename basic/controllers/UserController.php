<?php

namespace app\controllers;
/**
* @author WangBing
*/
use Yii;
use app\models\Record;
class UserController extends \yii\web\Controller
{
    /**
     * $id获取到的学号
     *
     */
    public function actionUser($id)
    {
        //echo "hello";
        //$request = \Yii::$app->request;
        //$id = $request->get("id"); 
        //$time = $request->get("time");
        //$posts = Yii::$app->db->createCommand('SELECT * FROM post')
        //    ->queryAll();
        //return $this->render('record');
        $command = Yii::$app->db->createCommand('SELECT * FROM StudentRecord WHERE ID='.$id);//查询数据库获取记录
        $post = $command->queryOne();//把拿一条记录拿出来
        $view = Yii::$app->view->params['data'] = $post["Score"];//将拿到的记录里面跑操次数取出来并存起来
        return $this->renderpartial('index');//跳转查询结果页面
    }

}
