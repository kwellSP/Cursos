<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class AereoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Este comando "desabilita" a proteção do método fill($data = []); nos models
        Model::unguard();

        DB::table('aerea')->insert([
        
        ]);

    }
}
