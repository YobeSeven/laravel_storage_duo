<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('membres')->insert([
            [
                'nom'=>'Ayhan',
                'age'=>23,
                'image'=>'https://prnt.sc/12fc5o9',
                'genre'=>'homme',
                'created_at'=>now(),
            ],
        ]);
    }
}
