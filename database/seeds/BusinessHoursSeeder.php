<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BusinessHoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [8,12,'2019-01-01',null,1,1],
            [12,16,'2019-01-01',null,2,3],
            [10,14,'2019-01-01',null,3,5],
            [16,20,'2019-06-01','2019-07-31',3,2]
        ];

        foreach ($datas as $data) {
            DB::table('business_hours')->insert([
                'opening' => $data[0],
                'closing' => $data[1],
                'date_from' => $data[2],
                'date_to' => $data[3],
                'frequency_id' => $data[4],
                'day_id' => $data[5]
            ]);
        }
    }
}
