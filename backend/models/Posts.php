<?php

namespace backend\models;

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

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'author_id' => Yii::t('app', 'Author ID'),
            'title' => Yii::t('app', 'Title'),
            'text' => Yii::t('app', 'Text'),
            'alias' => Yii::t('app', 'Alias'),
            'data' => Yii::t('app', 'Data'),
            'views' => Yii::t('app', 'Views'),
        ];
    }

    /**
     * Gets query for [[Author]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Users::className(), ['id' => 'author_id']);
    }
}
