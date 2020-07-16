<?php

namespace api2\models;

use Yii;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $accessToken
 *
 * @property Posts[] $posts
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password', 'accessToken'], 'required'],
            [['name', 'email', 'password', 'accessToken'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['accessToken'], 'unique'],
        ];
    }


}
