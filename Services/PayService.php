<?php
namespace app\services;

use app\models\Pay;
use Yii;
use yii\helpers\Url;
use yii\web\Link;
use yii\web\Linkable;

class PayService extends Pay //implements Linkable
{
    /**
     * @return array|void
     */
    public function fields()
    {
        return [
            'purpose_pay',
            'price',
//            'Return Link' => function($model){
//            return $this->register(10, 'item 3');
//        }
        ];
    }

    public function register($price, $purposePay)
    {
        $session = Yii::$app->session;
        if (!$session->isActive) {
            $session->open();
        }
        $session->set('price', $price);
        $session->set('purpose', $purposePay);
        $url =  "http://blogm/payments/card/form?sessionId=$session->id";
        $session->close();
        return $url;
    }



//    public function getLinks()
//    {
//        return [
//            Link::REL_SELF => Url::to(['user/view', 'id' => $this->id], true),
//        ];
//    }

}