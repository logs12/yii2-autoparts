<?php

use yii\db\Migration;

class m160426_112924_lang extends Migration
{
	public function safeUp()
	{
		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%lang}}', [
				'id' => $this->primaryKey(),
				'url' => $this->string(255)->notNull(),
				'local' => $this->string(255)->notNull(),
				'name' => $this->string(255)->notNull(),
				'default' =>$this->smallInteger()->notNull()->defaultValue(0),
				'date_update' => $this->integer()->notNull(),
				'date_create' => $this->integer()->notNull()
		], $tableOptions);

		$this->batchInsert('lang', ['url', 'local', 'name', 'default', 'date_update', 'date_create'], [
				['en', 'en-EN', 'English', 0, time(), time()],
				['ru', 'ru-RU', 'Русский', 1, time(), time()],
		]);
	}

	public function safeDown()
	{
		$this->dropTable('{{%lang}}');
	}
}
