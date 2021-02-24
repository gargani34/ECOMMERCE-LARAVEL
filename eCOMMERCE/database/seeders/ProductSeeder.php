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
        DB::table('products')->insert(
            [
            'name'=>'LG Mobile',
            'price'=>'200',
            'desc'=>'Les smartphones LG présentent un design épuré et moderne, pour une prise en main parfaite. Ainsi que de nombreux avantages et accessoires mobiles dont vous ne saurez plus vous passer !',
            'category'=>'Mobile',
            'gallery'=>'https://www.lg.com/fr/images/fr-smartphones-C0065-4.jpg',
            
            ]);
            DB::table('products')->insert(
        [
            'name'=>'Apple Mobile',
            'price'=>'859',
            'desc'=>'5G speed. A14 Bionic, the fastest chip in a smartphone.
            An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all — in two perfect sizes.',
            'category'=>'Mobile',
            'gallery'=>'https://static.fnac-static.com/fr-FR/fch/01/img/2857470d-d9c9-4c58-8b6b-a3f60ca14325.jpeg',
            
        ]);
        DB::table('products')->insert(
        [
            'name'=>'Samsung Mobile',
            'price'=>'748',
            'desc'=>'Galaxy S21 5G et S21+ 5G Conçus pour révolutionner la vidéo et la photographie avec une résolution 8K exceptionnelle et des photos jusqu en 64 MP. Disponibles en deux tailles et avec un design affirmé et unique, les Galaxy S21 illumineront votre quotidien',
            'category'=>'Mobile',
            'gallery'=>'https://i.gadgets360cdn.com/products/large/1555507135_635_samsung_galaxy_a60.jpg',
            
        ]);
        DB::table('products')->insert(
        [
            'name'=>'OPPO Mobile',
            'price'=>'450',
            'desc'=>'The smartphone comes with a big 6.5 inches display size with IPS LCD capacitive touchscreen technology that provides 720 x 1520 pixels resolution and 259 PPI density. It features a 90Hz refresh rate and Corning Gorilla Glass 3.',
            'category'=>'Mobile',
            'gallery'=>'https://www.gizmochina.com/wp-content/uploads/2020/09/Oppo-A33-2020.jpg',
            
        ]);
        }
        

    }

        
    

