<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use app\models\mymodel1;
use app\models\mymodel2;

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

    
}
