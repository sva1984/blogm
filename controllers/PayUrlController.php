<?php
namespace app\controllers;

use app\services\PayUrlService;
use yii\rest\ActiveController;

class PayUrlController extends ActiveController
{
//    public $payment = new PayUrlService('100', "Cherity");
    public $payment = "Return JSON";
    public function actionPay(){

    }

}