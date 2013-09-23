<?php

class m130923_110334_create_product_images_tbl extends CDbMigration
{
	public function up()
	{
            $this->createTable('product_images', array(
            'id' => 'pk',
            'path' => 'VARCHAR(100) NOT NULL',
            'product_id' => 'INT(2) UNSIGNED',
        ));
	}

	public function down()
	{
		$this->dropTable('products');
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}