<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%activity}}`.
 */
class m191002_204317_create_activity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%activity}}', [
            'id' => $this->primaryKey(),
            'activity_name' => $this->string(255)->notNull(),
            'activity_start_timestamp' => $this->timestamp()->defaultExpression("now()"),
            'activity_end_timestamp' => $this->timestamp(),
            'user_id' => $this->integer(),
            'body' => $this->text(),
            'blocking' => $this->tinyInteger(1)->defaultExpression("0"),
            'created_at' => $this->timestamp()->notNull()->defaultExpression("now()"),
            'updated_at' => $this->timestamp()
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%activity}}');
    }
}
