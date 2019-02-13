<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2019/2/13
 * Time: 21:27
 */

namespace app\controllers;


use yii\web\Controller;

class ProductController extends Controller
{
    public $layout = 'layout1';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDetail()
    {
        return $this->render('detail');
    }
}