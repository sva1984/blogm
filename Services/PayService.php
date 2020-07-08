<?php
namespace app\services;

use app\models\Pay;
use yii\helpers\Url;
use yii\web\Link;
use yii\web\Linkable;

class PayService extends Pay implements Linkable
{
    /**
     * @return array|void
     */
    public function fields()
    {
        return ['Return Link' => function($model){
            return $this->register(10, 'item 3');
        }];
    }

    public function register($price, $PurposePay)
    {
        $url =  "http://blogm/payments/card/form?sessionId=4e273d86-864c-429d-879a-34579708dd69";
        return $url;
    }



    public function getLinks()
    {
        return [
            Link::REL_SELF => Url::to(['user/view', 'id' => $this->id], true),
        ];
    }

}