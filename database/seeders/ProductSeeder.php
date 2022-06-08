<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

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
                'name'=>'Oppo mobile',
                'price'=>"300",
                'description'=>'A smartphone with 8gb ram and much more features',
                'category'=>'mobile',
                'gallery'=>'https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/navigation/find-series/find-x2-pro/Find%20X2%20Pro-navigation-Orange-v2.png.thumb.webp'
    
            ],
            [
                'name'=>'Panasonic Tv',
                'price'=>"400",
                'description'=>'A smart Tv with  much more features',
                'category'=>'TV',
                'gallery'=>'https://smartelectronics.lk/wp-content/uploads/2021/07/TH-32J401N.jpg'
    
            ],
            [
                'name'=>'Soni TV',
                'price'=>"500",
                'description'=>'A smart TV with 4gb ram and much more features',
                'category'=>'TV',
                'gallery'=>'https://www.sony.ie/image/6e61b47b3f1465e2e9ad82fd971f183f?fmt=pjpeg&wid=1014&hei=396&bgcolor=F1F5F9&bgc=F1F5F9'
    
            ],
            [
                'name'=>'LG fridge',
                'price'=>"200",
                'description'=>'A fridge with 4gb ram and much more features',
                'category'=>'fridge',
                'gallery'=>'https://media.istockphoto.com/photos/refrigerator-picture-id185295277?k=20&m=185295277&s=612x612&w=0&h=A3_GpFwnQvO0lJNt_ArDbGZeiSJo-hN83yjw7MN1Hmg='
    
                ]
        ]);
    }
}
