<?php
namespace app\controllers;

use app\services\PayService;
use yii\rest\ActiveController;

class CardController extends ActiveController
{
    public $modelClass =  PayService::class;

}