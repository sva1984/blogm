<?php

namespace app\modules\admin;

use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $layout = "/admin.php";
    public $controllerNamespace = 'app\modules\admin\controllers';

   public function behaviors()
   {
       return [
         'access' => [
             'class' => AccessControl::className(),
             'denyCallback' => function($rule, $acton)
             {
                 throw new NotFoundHttpException();
             },
             'rules' => [
                 [
                     'allow' => true,
                     'matchCallback' => function($rule, $action)
                     {
                         return \Yii::$app->user->identity->isAdmin;
                     }
                 ]
             ]
         ]
       ];
   }

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
