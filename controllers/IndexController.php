<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2019/1/24
 * Time: 22:37
 */

namespace app\controllers;


use app\models\Student;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'layout1';
//        echo "HelloWorld!!!";
//        return $this->render('index');
//        $student = Student::find()->one()->toArray();
        return $this->render('index');
    }
}