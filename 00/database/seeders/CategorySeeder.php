<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    private function getData() {
        // $faker = \Faker\Factory::create();

        $data = [];
        $category = ['Sport','Politics','Culture'];

        for ($i=0; $i < 3; $i++){
            $index = $i + 1;
            $data[] = [
                'title' => $category[$i] . " ($index)",  
            ];
        }

        return $data;
    }
}
