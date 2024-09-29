<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            [
                ['name' => 'Crèche', 'code' => 'C'],
                ['name' => 'Pré-maternelle', 'code' => 'PM'],
                ['name' => 'Maternelle', 'code' => 'M'],
                ['name' => 'Primaire', 'code' => 'P'],
                ['name' => 'Collège', 'code' => 'C'],
                ['name' => 'Lycée', 'code' => 'L'],
            ]
            
        ];

        DB::table('class_types')->insert($data);

    }
}
