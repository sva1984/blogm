<?php
namespace app\controllers;

use app\models\PrivateUser;
use app\services\PayUrlService;
use yii\rest\ActiveController;

class PayUrlController extends ActiveController
{
//    public $payment = new PayUrlService('100', "Cherity");
    public $modelClass =  PrivateUser::class;
//    public function actionPay(){
//
//    }

}