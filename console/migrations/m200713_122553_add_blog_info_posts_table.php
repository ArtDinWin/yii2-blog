<?php

use yii\db\Migration;

/**
 * Class m200713_122553_add_blog_info_posts_table
 */
class m200713_122553_add_blog_info_posts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('posts', ['id' => 1, 'title' => 'Заголовок 1', 'text' => 'Учитывая ключевые сценарии поведения, убеждённость некоторых оппонентов в значительной степени обусловливает важность благоприятных перспектив. В своём стремлении улучшить пользовательский опыт мы упускаем, что реплицированные с зарубежных источников.', 'alias' => 'post_1', 'data' => '2020-07-08' ]);
        $this->insert('posts', ['id' => 2, 'title' => 'Заголовок 2', 'text' => 'Учитывая ключевые сценарии поведения, убеждённость некоторых оппонентов в значительной степени обусловливает важность благоприятных перспектив. В своём стремлении улучшить пользовательский опыт мы упускаем, что реплицированные с зарубежных источников.', 'alias' => 'post_2', 'data' => '2020-07-09' ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('posts', ['id' => 1]);
		$this->delete('posts', ['id' => 2]);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200713_122553_add_blog_info_posts_table cannot be reverted.\n";

        return false;
    }
    */
}
