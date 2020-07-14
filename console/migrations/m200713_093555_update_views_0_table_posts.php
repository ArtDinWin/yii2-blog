<?php

use yii\db\Migration;

/**
 * Class m200713_093555_update_views_0_table_posts
 */
class m200713_093555_update_views_0_table_posts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update('posts', array('views' => 0), array('id' => 1 ));
		$this->update('posts', array('views' => 0), array('id' => 2 ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200713_093555_update_views_0_table_posts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200713_093555_update_views_0_table_posts cannot be reverted.\n";

        return false;
    }
    */
}
