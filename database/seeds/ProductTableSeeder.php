<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x = 0;$x <=32 ; $x++){
            $product = new \App\Product(
                [
                    'imagePath'=>'http://placekitten.com/402/'.($x+320),
                    'title'=>'Dummy Data '.$x,
                    'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                    'price' => 10.42 +$x
                ]
            );
            $product->save();
    }
    }
}
