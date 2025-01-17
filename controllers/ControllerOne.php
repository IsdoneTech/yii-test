<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessController;
use yii\web\Controller;

class ControllerOne extends Controller
{
    public function actionHome(){
        return $this->render('home');
    }
}
?>
