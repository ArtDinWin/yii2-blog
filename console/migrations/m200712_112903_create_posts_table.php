<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%posts}}`.
 */
class m200712_112903_create_posts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->createTable('posts',	[
			'id' => $this->primaryKey(),
			'title' => $this->string(200),
			'text' => $this->string(), 
			'author_id' => $this->integer(), 
			'alias' => $this->string(200),
			'data' => $this->date("Y-m-d H:i:s"),			
			]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('posts');
    }
}
