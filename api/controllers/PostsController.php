<?php


namespace frontend\controllers;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Posts;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class PostsController extends Controller
{
    public function actionIndex() {
        $posts = Posts::find()->all();

        return $this->render('posts', [
            'posts' => $posts
        ]);
    }

    public function actionPosts() {
        $posts = Posts::find()->all();
		
        return $this->render('posts', [
            'posts' => $posts
        ]);
    }

    public function actionPost($id) {
 $post = Posts::findOne($id);
// $post = Posts::find()->where(['id' => Yii::$app->request->get()['id']])->one();
 if ($post === null) {
 throw new NotFoundHttpException('Page not found');

 }


	$post->views +=1;
	$post->save();
    return $this->render('post', [
        'post' => $post
    ]);


                                    }
}