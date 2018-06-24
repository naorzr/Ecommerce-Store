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
        for($x = 0;$x <=28 ; $x++){
            $product = new \App\Product(
                [
                    'imagePath'=>'https://preview.ibb.co/khzTx8/20180620_232043.jpg',
                    'title'=>'Harry Popper '.$x,
                    'description'=> 'Well.. This is a description '.$x,
                    'price' => 10.42 +$x
                ]
            );
            $product->save();
    }
    }
}
