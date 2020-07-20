<?php

namespace api\models;

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
 * @property Posts $author
 */
class Test extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return '{{%test}}';
    }
	




}
