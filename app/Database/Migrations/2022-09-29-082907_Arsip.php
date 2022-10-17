<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Arsip extends Migration
{
    public function up()
    {
        $this->forge->addfield([
            'id'        =>['type'=>'int', 'constraint'=>10,'unsigned'=>true, 'auto_increment'=>true],
            'nomor'     =>['type'=>'varchar', 'constrain'=>25, 'null'=>true],
            'judul'     =>['type'=>'varchar', 'constrain'=>255, 'null'=>true],
            'ringkasan' =>['type'=>'text', 'null'=>true],
            'tgl'       =>['type'=>'date', 'null'=>true],
            'kategori_id' =>['type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true],
            'pengguna_id' =>['type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true],
            'created_at'  =>['type'=>'datetime', 'null'=>true],
            'update_at'   =>['type'=>'datetime', 'null'=>true],
            'delete_at'   =>['type'=>'datetime', 'null'=>true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addforeignkey('kategori_id', 'kategori', 'id', 'cascade', 'set null');
        $this->forge->addforeignkey('pengguna-id', 'pengguna', 'id', 'cascade');
        $this->forge->createtable('arsip');

    }
    
        
    public function down()
    
    {
        $this->forge->droptable('arsip');
    }


}

