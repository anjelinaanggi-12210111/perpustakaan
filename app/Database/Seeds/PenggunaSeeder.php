<?php

namespace App\Database\Seeds;

use App\Models\PenggunaModel;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $id = (new PenggunaModel())->insert([
            'nama'=>'Administrator',
            'gender'=>'L',
            'email'=>'agung.ako@bsi.ac.id',
        ]);
        echo "hasil id = $id";
    }
}
