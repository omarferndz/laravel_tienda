<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name'        => 'Playera 1',
                'slug'        => 'playera-1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur 
                                  adipisicing elit, Tempore, perferendis!',
                'extract'     => 'Lorem ipsum dolor sit amet, consectetur 
                                  adipisicing elit',
                'price'       => '275.00',
                'image'       => 'image/playera1.jpeg',
                'visible'     => 1,
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
                'category_id' => 1
            ],
            [
                'name'        => 'Playera 2',
                'slug'        => 'playera-2',
                'description' => 'Lorem ipsum dolor sit amet, consectetur 
                                  adipisicing elit, Tempore, perferendis!',
                'extract'     => 'Lorem ipsum dolor sit amet, consectetur 
                                  adipisicing elit',
                'price'       => '255.00',
                'image'       => 'image/playera2.png',
                'visible'     => 1,
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
                'category_id' => 1
            ],  
            [
                'name'        => 'Playera 3',
                'slug'        => 'playera-3',
                'description' => 'Lorem ipsum dolor sit amet, consectetur 
                                  adipisicing elit, Tempore, perferendis!',
                'extract'     => 'Lorem ipsum dolor sit amet, consectetur 
                                  adipisicing elit',
                'price'       => '300.00',
                'image'       => 'image/playera3.jpeg',
                'visible'     => 1,
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
                'category_id' => 1
            ],  
            [
                'name'        => 'Playera 4',
                'slug'        => 'playera-4',
                'description' => 'Lorem ipsum dolor sit amet, consectetur 
                                  adipisicing elit, Tempore, perferendis!',
                'extract'     => 'Lorem ipsum dolor sit amet, consectetur 
                                  adipisicing elit',
                'price'       => '475.00',
                'image'       => 'image/playera4.jpg',
                'visible'     => 1,
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
                'category_id' => 2
            ],  
            [
                'name'        => 'Playera 5',
                'slug'        => 'playera-5',
                'description' => 'Lorem ipsum dolor sit amet, consectetur 
                                  adipisicing elit, Tempore, perferendis!',
                'extract'     => 'Lorem ipsum dolor sit amet, consectetur 
                                  adipisicing elit',
                'price'       => '280.00',
                'image'       => 'image/playera5.jpeg',
                'visible'     => 1,
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
                'category_id' => 2
            ],  
            [
                'name'        => 'Playera 6',
                'slug'        => 'playera-6',
                'description' => 'Lorem ipsum dolor sit amet, consectetur 
                                  adipisicing elit, Tempore, perferendis!',
                'extract'     => 'Lorem ipsum dolor sit amet, consectetur 
                                  adipisicing elit',
                'price'       => '300.00',
                'image'       => 'image/playera6.jpg',
                'visible'     => 1,
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
                'category_id' => 1
            ],
            [
                'name'        => 'Playera 7',
                'slug'        => 'playera-7',
                'description' => 'Lorem ipsum dolor sit amet, consectetur 
                                  adipisicing elit, Tempore, perferendis!',
                'extract'     => 'Lorem ipsum dolor sit amet, consectetur 
                                  adipisicing elit',
                'price'       => '375.00',
                'image'       => 'image/playera7.jpeg',
                'visible'     => 1,
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
                'category_id' => 2
            ], 
            [
                'name'        => 'Playera 8',
                'slug'        => 'playera-8',
                'description' => 'Lorem ipsum dolor sit amet, consectetur 
                                  adipisicing elit, Tempore, perferendis!',
                'extract'     => 'Lorem ipsum dolor sit amet, consectetur 
                                  adipisicing elit',
                'price'       => '300.00',
                'image'       => 'image/playera8.jpg',
                'visible'     => 1,
                'created_at'  => new DateTime,
                'updated_at'  => new DateTime,
                'category_id' => 2
            ],             
        );

        Product::insert($data);
    }
}