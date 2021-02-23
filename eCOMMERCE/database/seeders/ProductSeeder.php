<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
            'name'=>'LG mobile',
            'price'=>'200',
            'desc'=>'Mobilephone with more features',
            'category'=>'Mobile',
            'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.macrumors.com%2Froundup%2Fiphone-x%2F&psig=AOvVaw0ttLVu9pBbeNbQ_gezc-MS&ust=1614165355942000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPDVktfw_-4CFQAAAAAdAAAAABAD',
            
            ],
            [
                'name'=>'Samsung mobile',
                'price'=>'400',
                'desc'=>'Mobilephone with more features',
                'category'=>'Mobile',
                'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.macrumors.com%2Froundup%2Fiphone-x%2F&psig=AOvVaw0ttLVu9pBbeNbQ_gezc-MS&ust=1614165355942000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPDVktfw_-4CFQAAAAAdAAAAABAD',
                
            ],
            [
                'name'=>'iphone mobile',
                'price'=>'600',
                'desc'=>'Mobilephone with more features',
                'category'=>'Mobile',
                'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.macrumors.com%2Froundup%2Fiphone-x%2F&psig=AOvVaw0ttLVu9pBbeNbQ_gezc-MS&ust=1614165355942000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPDVktfw_-4CFQAAAAAdAAAAABAD',
                
            ]
    );
    }
}
