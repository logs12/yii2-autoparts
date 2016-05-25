<?php

use yii\db\Migration;

class m160306_110214_main_banner extends Migration
{

    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%main_banner}}', [
                'banner_image' => $this->string(200)->defaultValue(null),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%main_banner}}');

        return false;
    }

}
