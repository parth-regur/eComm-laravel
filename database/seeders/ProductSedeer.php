<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'LG Mobile',
                'price' => '200',
                'description' => 'A smartphone with 8gb RAM',
                'category' => 'mobile',
                'gallery' => 'https://images-cdn.ubuy.co.in/633aad8663ce1a64b14e8690-lg-velvet-5g-128gb-6gb-ram.jpg'
            ],
            [
                'name' => 'Oppo Mobile',
                'price' => '150',
                'description' => 'A smartphone with 12gb RAM',
                'category' => 'mobile',
                'gallery' => 'https://media.croma.com/image/upload/v1662436877/Croma%20Assets/Communication/Mobiles/Images/251265_qprpcz.png'
            ],
            [
                'name' => 'Vivo Mobile',
                'price' => '170',
                'description' => 'A smartphone with 16gb RAM',
                'category' => 'mobile',
                'gallery' => 'https://5.imimg.com/data5/SELLER/Default/2022/9/EC/LX/UG/53877097/vivo-s1-blue-4gb-ram-128gb-storage-mobile-phone-1000x1000.jpg'
            ],
            [
                'name' => 'Oneplus Mobile',
                'price' => '250',
                'description' => 'A smartphone with 32gb RAM',
                'category' => 'mobile',
                'gallery' => 'https://m.media-amazon.com/images/I/618hqM-yxtL._SX679_.jpg'
            ],
            [
                'name' => 'Sony TV',
                'price' => '500',
                'description' => 'A smart andriod 4k TV',
                'category' => 'tv',
                'gallery' => 'https://m.media-amazon.com/images/I/81sFUK4Sv0L._SL1500_.jpg'
            ],
            [
                'name' => 'Panasonic TV',
                'price' => '400',
                'description' => 'A smart andriod 3D TV',
                'category' => 'tv',
                'gallery' => 'https://5.imimg.com/data5/BC/WD/MY-29094786/panasonic-led-television-500x500.jpg'
            ],
            [
                'name' => 'Whirlpool Fridge',
                'price' => '550',
                'description' => 'A smart refrigerator',
                'category' => 'fridge',
                'gallery' => 'https://whirlpoolindia.vtexassets.com/arquivos/ids/159402/21182_front_1200x1200_1.jpg?v=637789977366600000'
            ],
        ]);
    }
}
