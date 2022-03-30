<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'apple phone',
                'price'=>'120000',
                'category'=>'ios phone',
                'description'=>"this mobile is 8GB RAM and 128GB ROM and much more feature",
                'gallery'=>"https://www.notebookcheck.net/fileadmin/Notebooks/Apple/iPhone_13_Pro/Produktfotos_Apple_iPhone_13_Pro_1448.jpg"
            ],
            [
                'name'=>'One plus SmartTV',
                'price'=>'50000',
                'category'=>'smart TV',
                'description'=>"this TV is 1080p display",
                'gallery'=>"https://www.xda-developers.com/files/2019/09/oneplus-tv-q1-55-pro-featured.jpg"
            ],
            [
                'name'=>'Samsung Fidge',
                'price'=>'500000',
                'category'=>'smart fridge',
                'description'=>"this fridge has an ro with much more feature",
                'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKbmP5W5Ol8abLfd2dScRHP29BKXtpECW4Gw&usqp=CAU"
            ]
        ]);
    }
}
