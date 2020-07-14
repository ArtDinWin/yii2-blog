<?php


namespace frontend\controllers;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Posts;

class PostsController extends Controller
{
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionPosts() {
        $posts = Posts::find()->all();
		
        return $this->render('posts', [
            'posts' => $posts
        ]);
    }

    public function actionPost() {
        $post = Posts::find()->where(['id' => Yii::$app->request->get()['id']])->one();
		$post->views +=1;
		$post->save();
        return $this->render('post', [
            'post' => $post
        ]);
    }
}