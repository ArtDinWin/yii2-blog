<?php


namespace api\controllers;


use yii\rest\ActiveController;

class TestController extends ActiveController
{
public function init()
{
    parent::init();
    Yii::$app->response->format = Response::FORMAT_JSON;
}

public function actionTest()
{
    $items = ['one', 'two', 'three' => ['a', 'b', 'c']];
    return $items;
}



}