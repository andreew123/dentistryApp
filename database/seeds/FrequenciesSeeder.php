<?php

use Illuminate\Database\Seeder;

class FrequenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['even', 'páros'], 
            ['odd', 'páratlan'], 
            ['all', '']
        ];

        foreach ($datas as $data) {
            DB::table('frequencies')->insert([
                'type' => $data[0],
                'name' => $data[1]
            ]);
        }
    }
}
