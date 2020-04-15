<?php

namespace app\models;


use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model
{
    public $image;

    public function uploadFile(UploadedFile $file)
    {
        $file->saveAs(Yii::getAlias('@web') . 'uploads/' . $file->name);
        return $file->name;
    }
}