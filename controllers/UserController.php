<?php
namespace app\controllers;

use app\models\PrivateUser;
use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = PrivateUser::class;
}