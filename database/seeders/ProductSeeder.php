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
        DB::table('products')->insert([
        	[
        	'name'=>'Oppo f17',
        	'price'=>'30000',
        	'description'=>'A smartphone with 8gb ram and many featurs',
        	'category'=>'mobile',
        	'gallery'=>'https://www.mega.pk/items_images/t_21190.png'
        	],
        	[
        	'name'=>'Samsung a51',
        	'price'=>'20000',
        	'description'=>'A smartphone with 4gb ram and many featurs',
        	'category'=>'mobile',
        	'gallery'=>'https://media.naheed.pk/catalog/product/cache/49dcd5d85f0fa4d590e132d0368d8132/1/2/1206844-1.jpg'
       		 ],
       		 [
        	'name'=>'Haier LCD',
        	'price'=>'61500',
        	'description'=>'A smart LCD with many featurs',
        	'category'=>'LCD',
        	'gallery'=>'https://www.onlinebuy.pk/wp-content/uploads/2019/11/Haier-LCD-LED-LE-50B9200M-Mira-Cast-Onlinebuy-pk1-600x600.jpg'
       		 ],
       		 [
        	'name'=>'223V7QSB',
        	'price'=>'40000',
        	'description'=>'A smart LCD with many featurs',
        	'category'=>'LCD',
        	'gallery'=>'https://images.philips.com/is/image/PhilipsConsumer/223V7QSB_00-IMS-en_PK?$jpglarge$&wid=960'
       		 ]
        ]);
    }
}
