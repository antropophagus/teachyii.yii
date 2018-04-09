<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\mymodel;

class SiteController extends Controller //Site - название папки, содержащую view's (views/site)
{

    public function actionIndex() //Index - url адрес, который будет вызывать данную функцию
    {
        return $this->render('index'); //index - название файла в папке views/site
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionMypage()
    {
        $var = 'Hello!';
        $array = mymodel::getAll();
        return $this->render('mypage',['var' => $var,'array'=>$array]); //Передача переменных в файл view
    }
}
