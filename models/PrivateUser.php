<?php
/**
 * Created by PhpStorm.
 * User: asv
 * Date: 06.07.2020
 * Time: 16:33
 */

namespace app\models;


class PrivateUser extends User
{
    public function fields()
    {
        return [
            'id',
            'name',
            'email',
            'mama',
            'new_field' => function($model){
                return ($model->id == 1) ? 'first user' : "other user";
            }
        ];
    }

    public function extraFields()
    {
        return [];
    }

    public function getMama(){
        return $this->id . ' Mothers';
    }
}