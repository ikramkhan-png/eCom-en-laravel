<?php

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
        DB::table('Products')->insert([
            [
            'name'=>'Oppo Mobile',
            'price'=>'40000',
            'description'=>'smartphone with 8gb ram and much more features',
            'category'=>'mobile',
            'gallery'=>'https://media.istockphoto.com/photos/reno-6-pro-picture-id1334790547'
            ],
            [
            'name'=>'Panasonic Tv',
            'price'=>'10000',
            'description'=>'A Tv with much more features',
            'category'=>'tv',
            'gallery'=>'https://cdn.pixabay.com/photo/2013/07/12/14/10/plasma-tv-147902_960_720.png'
            ],[
            'name'=>'Soni Tv',
            'price'=>'20000',
            'description'=>'A Tv with much more features',
            'category'=>'tv',
            'gallery'=>'https://media.istockphoto.com/vectors/modern-black-tv-frame-with-blank-screen-vector-mockup-1920-on-1080-hd-vector-id1047065044?s=612x612'
            ],[
            'name'=>'LG fridge',
            'price'=>'80000',
            'description'=>'A fridge with much more features',
            'category'=>'fridge',
            'gallery'=>'https://cdn.pixabay.com/photo/2019/02/01/06/36/graphic-3968479__340.png'
        ]

        ]);
    }
}
