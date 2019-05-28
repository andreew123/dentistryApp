<?php

use Illuminate\Database\Seeder;

class DaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            'hétfő', 'kedd', 'szerda', 'csütörtök', 'péntek'
        ];

        foreach ($datas as $data) {
            DB::table('days')->insert([
                'name' => $data
            ]);
        }
    }
}
