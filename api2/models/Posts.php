<?php

namespace api2\models;

use Yii;

/**
 * This is the model class for table "{{%posts}}".
 *
 * @property int $id
 * @property int|null $author_id
 * @property string $title
 * @property string $text
 * @property string $alias
 * @property string $data
 * @property int $views
 *
 * @property Users $author
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%posts}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author_id', 'views'], 'integer'],
            [['title', 'text', 'alias', 'data'], 'required'],
            [['text'], 'string'],
            [['data'], 'safe'],
            [['title'], 'string', 'max' => 256],
            [['alias'], 'string', 'max' => 100],
            [['alias'], 'unique'],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }


}
