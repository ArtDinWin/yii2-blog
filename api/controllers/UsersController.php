<?php

namespace api\controllers;

use Yii;
use backend\models\Users;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsersController implements the CRUD actions for Users model.
 */
class UsersController extends ActiveController
{
    public $modelClass = 'api\models\Users';
}
