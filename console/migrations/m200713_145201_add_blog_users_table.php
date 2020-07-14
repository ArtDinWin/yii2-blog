<?php

use yii\db\Migration;

/**
 * Class m200713_145201_add_blog_users_table
 */
class m200713_145201_add_blog_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users',	[
			'id' => $this->primaryKey(),
			'name' => $this->string()->notNull(),
			'email' => $this->string()->notNull()->unique(), 
			'password' => $this->string()->notNull(), 
			'accessToken' => $this->string()->notNull()->unique(),
		
        ]);
        $this->addColumn('posts', 'author_id', $this->integer()->after('id'));

$this->addForeignKey('fk_users_to_posts', 'posts', 'author_id', 'users', 'id', 'SET NULL', 'SET NULL');



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_users_to_posts', 'posts');
        $this->dropColumn('posts', 'author_id');
        $this->dropTable('users');
    }

}
