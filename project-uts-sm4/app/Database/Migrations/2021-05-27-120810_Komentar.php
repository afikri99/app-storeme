<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komentar extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'=> [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'postId'=> [
				'type'       => 'INT',
				'constraint' => 5,
			],
			'name'=> [
				'type'       => 'TEXT',
				'null'       => true,
			],
			'Email'=> [
				'type'       => 'TEXT',
				'null'       => true,
			],
			'body'=> [
				'type'       => 'TEXT',
				'null'       => true,
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('komentar');
	}

	public function down()
	{
		$this->forge->dropTable('komentar');
	}
}
