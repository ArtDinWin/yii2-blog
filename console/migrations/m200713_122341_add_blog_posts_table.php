<?php

use yii\db\Migration;

/**
 * Class m200713_122341_add_blog_posts_table
 */
class m200713_122341_add_blog_posts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->createTable('posts',	[
			'id' => $this->primaryKey(),
			'title' => $this->string(256)->notNull(),
			'text' => $this->text()->notNull(), 
//			'author_id' => $this->integer()->notNull()->unique(), 
			'alias' => $this->string(100)->notNull()->unique(),
			'data' => $this->date("Y-m-d H:i:s")->notNull(),			
			]);
        $this->addColumn('posts', 'views', $this->integer()->notNull()->defaultValue(0)->after('data'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('posts');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200713_122341_add_blog_posts_table cannot be reverted.\n";

        return false;
    }
    */
}
