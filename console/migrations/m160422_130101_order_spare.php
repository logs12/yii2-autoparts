<?php

use yii\db\Migration;

class m160422_130101_order_spare extends Migration
{
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }


        $this->createTable('{{%order_spare}}', [
                'id' => $this->primaryKey(),
                'callback_id' => $this->integer()->notNull(),
                'vin' => $this->integer()->defaultValue(0),
                'catalog_number' => $this->integer()->defaultValue(0),
                'comment' => $this->string()->notNull()->defaultValue(''),
                'car_model' => $this->string()->notNull()->defaultValue(''),
                'created_at' => $this->integer()->notNull(),
                'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey(
                'order_spare_fk',
                '{{%order_spare}}',
                'callback_id',
                '{{%callback}}',
                'id',
                'CASCADE',
                'RESTRICT'
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%order_spare}}');

        return false;
    }

}
