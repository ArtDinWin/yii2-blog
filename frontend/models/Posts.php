<?php


namespace frontend\models;
use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class Posts extends ActiveRecord
{

public function getFullTitle($title) {
	return 'Пост: ' .$title;
}

public function getShortText($text) {
	$text = mb_substr($text, 0, 120);
	$firsPos = strripos($text, ' ');
	$text = mb_substr($text, 0, $firsPos);
	return $text . ' ... ';
}

}