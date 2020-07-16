<?php

namespace api2\controllers;
use yii\rest\ActiveController;

/**
 * PostsController implements the CRUD actions for Posts model.
 */
class PostsController extends ActiveController
{
    public $modelClass = 'api\models\Posts';

}
