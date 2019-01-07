<?php
/**
 * Created by PhpStorm.
 * User: chobits
 * Date: 2018-12-12
 * Time: 22:56
 */

namespace app\controllers;

use app\models\District;
use yii\web\Controller;

class DemoController extends Controller
{
    public function actionIndex(){
        $posts = \Yii::$app->db->createCommand('SELECT * FROM district')
            ->queryAll();
        print_r($posts);die;

        return $this->render('index');
    }

}