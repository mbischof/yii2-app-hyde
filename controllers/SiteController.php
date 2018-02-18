<?php

namespace app\controllers;

use yii\helpers\VarDumper;
use yii\web\Controller;
use Yii;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}