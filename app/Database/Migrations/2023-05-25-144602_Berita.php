<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Berita extends Migration
{
    public function up()
    {
        //
        $this->forge->addField('id');
        $this->forge->addField([
			'judul'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
            'konten' => [
                'type' => 'TEXT',
                'null' => true,
            ],            
            'foto'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			]
		]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('berita');
    }

    public function down()
    {
        //
        $this->forge->dropTable('berita');
    }
}
