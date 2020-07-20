<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m200717_183209_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'slug' => $this->string(256)->notNull()->unique(),
            'title' => $this->string(256)->notNull(),
            'description' => $this->text()->notNull(),

            'enabled' => $this->boolean()->notNull()->defaultValue(0),
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
