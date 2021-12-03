<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Premium Class', 
                'slug' => 'premium-class',
                'price' => 99,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
            [
                'title' => 'Regular Class', 
                'slug' => 'regular-class',
                'price' => 0,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ]
        ];

        //1st method (created_at dan updated_at akan dibuat otomatis)
        // foreach($camps as $camp) {
        //     Camp::crate($camp);
        // }

        //2nd Method (created_at dan updated_at tidak otomatis dibuat)
        Camp::insert($camps);
    }
}
