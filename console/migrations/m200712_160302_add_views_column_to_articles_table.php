<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%articles}}`.
 */
class m200712_160302_add_views_column_to_articles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('articles', 'views', $this->integer()->after('data'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
		$this->delete('articles', ['id' => 1]);
        $this->dropColumn('articles', 'views');
    }
}
