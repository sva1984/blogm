<?php

namespace app\controllers;


use app\models\LoginForm;
use app\models\User;
use Yii;
use yii\web\Controller;

class AuthController extends Controller
{
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionTest()
    {
        $user = User::findOne(1);
//        Yii::$app->user->login($user);
        Yii::$app->user->logout();
        if(Yii::$app->user->isGuest){
            echo "Пользовыатель гость";
        }
        else{
            echo "Пользователь Авторизован";
        }
//        echo "<pre>";
//        var_dump($user);die;
//        var_dump(Yii::$app->user->isGuest);die;

    }
}