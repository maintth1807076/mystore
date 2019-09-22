<?php

use Illuminate\Database\Seeder;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('order_details')->truncate();
        \Illuminate\Support\Facades\DB::table('order_details')->insert([
            [
                'product_id' => 17,
                'quantity' => 2,
                'unit_price' => \App\Product::find(17)->price,
                'order_id' => 1,
                'created_at' => '2018-07-27 02:07:01',
            ],
            [
                'product_id' => 20,
                'quantity' => 1,
                'unit_price' => \App\Product::find(20)->price,
                'order_id' => 1,
                'created_at' => '2018-07-27 02:07:01',
            ],
            [
                'product_id' => 31,
                'quantity' => 2,
                'unit_price' => \App\Product::find(31)->price,
                'order_id' => 1,
                'created_at' => '2018-07-27 02:07:01',
            ],
            [
                'product_id' => 40,
                'quantity' => 1,
                'unit_price' => \App\Product::find(40)->price,
                'order_id' => 2,
                'created_at' => '2019-08-13 13:07:00'
            ],
            [
                'product_id' => 19,
                'quantity' => 3,
                'unit_price' => \App\Product::find(19)->price,
                'order_id' => 2,
                'created_at' => '2019-08-13 13:07:00'
            ],
            [
                'product_id' => 29,
                'quantity' => 2,
                'unit_price' => \App\Product::find(29)->price,
                'order_id' => 2,
                'created_at' => '2019-08-13 13:07:00'
            ],
            [
                'product_id' => 1,
                'quantity' => 1,
                'unit_price' => \App\Product::find(1)->price,
                'order_id' => 2,
                'created_at' => '2019-08-13 13:07:00'
            ],
            [
                'product_id' => 10,
                'quantity' => 4,
                'unit_price' => \App\Product::find(10)->price,
                'order_id' => 3,
                'created_at' => '2019-08-06 12:30:30',
            ],
            [
                'product_id' => 34,
                'quantity' => 2,
                'unit_price' => \App\Product::find(34)->price,
                'order_id' => 3,
                'created_at' => '2019-08-06 12:30:30',
            ],
            [
                'product_id' => 36,
                'quantity' => 1,
                'unit_price' => \App\Product::find(36)->price,
                'order_id' => 3,
                'created_at' => '2019-08-06 12:30:30',
            ],
            [
                'product_id' => 35,
                'quantity' => 2,
                'unit_price' => \App\Product::find(35)->price,
                'order_id' => 4,
                'created_at' => '2019-09-09 15:25:21',
            ],
            [
                'product_id' => 37,
                'quantity' => 3,
                'unit_price' => \App\Product::find(37)->price,
                'order_id' => 4,
                'created_at' => '2019-09-09 15:25:21',
            ],
            [
                'product_id' => 21,
                'quantity' => 1,
                'unit_price' => \App\Product::find(21)->price,
                'order_id' => 5,
                'created_at' => '2019-09-10 17:40:22',
            ],
            [
                'product_id' => 27,
                'quantity' => 2,
                'unit_price' => \App\Product::find(27)->price,
                'order_id' => 5,
                'created_at' => '2019-09-10 17:40:22',
            ],
            [
                'product_id' => 2,
                'quantity' => 4,
                'unit_price' => \App\Product::find(2)->price,
                'order_id' => 5,
                'created_at' => '2019-09-10 17:40:22',
            ],
            [
                'product_id' => 14,
                'quantity' => 1,
                'unit_price' => \App\Product::find(14)->price,
                'order_id' => 5,
                'created_at' => '2019-09-10 17:40:22',
            ],
            [
                'product_id' => 18,
                'quantity' => 1,
                'unit_price' => \App\Product::find(18)->price,
                'order_id' => 6,
                'created_at' => '2019-09-22 18:31:05',
            ],
            [
                'product_id' => 7,
                'quantity' => 2,
                'unit_price' => \App\Product::find(7)->price,
                'order_id' => 6,
                'created_at' => '2019-09-22 18:31:05',
            ],
            [
                'product_id' => 3,
                'quantity' => 3,
                'unit_price' => \App\Product::find(3)->price,
                'order_id' => 6,
                'created_at' => '2019-09-22 18:31:05',
            ],
            [
                'product_id' => 6,
                'quantity' => 1,
                'unit_price' => \App\Product::find(6)->price,
                'order_id' => 6,
                'created_at' => '2019-09-22 18:31:05',
            ],
            [
                'product_id' => 38,
                'quantity' => 2,
                'unit_price' => \App\Product::find(38)->price,
                'order_id' => 7,
                'created_at' => '2019-09-14 15:36:07',
            ],
            [
                'product_id' => 32,
                'quantity' => 1,
                'unit_price' => \App\Product::find(32)->price,
                'order_id' => 7,
                'created_at' => '2019-09-14 15:36:07',
            ],
            [
                'product_id' => 3,
                'quantity' => 3,
                'unit_price' => \App\Product::find(3)->price,
                'order_id' => 7,
                'created_at' => '2019-09-14 15:36:07',
            ],
            [
                'product_id' => 19,
                'quantity' => 1,
                'unit_price' => \App\Product::find(19)->price,
                'order_id' => 7,
                'created_at' => '2019-09-14 15:36:07',
            ],
            [
                'product_id' => 11,
                'quantity' => 1,
                'unit_price' => \App\Product::find(11)->price,
                'order_id' => 8,
                'created_at' => '2019-07-15 08:45:41',
            ],
            [
                'product_id' => 23,
                'quantity' => 1,
                'unit_price' => \App\Product::find(23)->price,
                'order_id' => 8,
                'created_at' => '2019-07-15 08:45:41',
            ],
            [
                'product_id' => 25,
                'quantity' => 2,
                'unit_price' => \App\Product::find(25)->price,
                'order_id' => 8,
                'created_at' => '2019-07-15 08:45:41',
            ],
            [
                'product_id' => 26,
                'quantity' => 2,
                'unit_price' => \App\Product::find(26)->price,
                'order_id' => 9,
                'created_at' => '2019-07-20 09:27:36',
            ],
            [
                'product_id' => 39,
                'quantity' => 1,
                'unit_price' => \App\Product::find(39)->price,
                'order_id' => 9,
                'created_at' => '2019-07-20 09:27:36',
            ],
            [
                'product_id' => 5,
                'quantity' => 1,
                'unit_price' => \App\Product::find(5)->price,
                'order_id' => 9,
                'created_at' => '2019-07-20 09:27:36',
            ],
            [
                'product_id' => 8,
                'quantity' => 1,
                'unit_price' => \App\Product::find(8)->price,
                'order_id' => 9,
                'created_at' => '2019-07-20 09:27:36',
            ],
            [
                'product_id' => 9,
                'quantity' => 2,
                'unit_price' => \App\Product::find(9)->price,
                'order_id' => 10,
                'created_at' => '2019-07-21 09:30:01',
            ],
            [
                'product_id' => 15,
                'quantity' => 1,
                'unit_price' => \App\Product::find(15)->price,
                'order_id' => 10,
                'created_at' => '2019-07-21 09:30:01',
            ],
            [
                'product_id' => 28,
                'quantity' => 1,
                'unit_price' => \App\Product::find(28)->price,
                'order_id' => 10,
                'created_at' => '2019-07-21 09:30:01',
            ],
            [
                'product_id' => 40,
                'quantity' => 1,
                'unit_price' => \App\Product::find(40)->price,
                'order_id' => 11,
                'created_at' => '2019-07-27 10:47:01',
            ],
            [
                'product_id' => 31,
                'quantity' => 5,
                'unit_price' => \App\Product::find(31)->price,
                'order_id' => 11,
                'created_at' => '2019-07-27 10:47:01',
            ],
            [
                'product_id' => 30,
                'quantity' => 2,
                'unit_price' => \App\Product::find(30)->price,
                'order_id' => 11,
                'created_at' => '2019-07-27 10:47:01',
            ],
            [
                'product_id' => 31,
                'quantity' => 1,
                'unit_price' => \App\Product::find(31)->price,
                'order_id' => 11,
                'created_at' => '2019-07-27 10:47:01',
            ],
            [
                'product_id' => 4,
                'quantity' => 3,
                'unit_price' => \App\Product::find(4)->price,
                'order_id' => 12,
                'created_at' => '2019-08-30 19:07:01',
            ],
            [
                'product_id' => 9,
                'quantity' => 2,
                'unit_price' => \App\Product::find(9)->price,
                'order_id' => 12,
                'created_at' => '2019-08-30 19:07:01',
            ],
            [
                'product_id' => 33,
                'quantity' => 1,
                'unit_price' => \App\Product::find(33)->price,
                'order_id' => 12,
                'created_at' => '2019-08-30 19:07:01',
            ],
            [
                'product_id' => 20,
                'quantity' => 1,
                'unit_price' => \App\Product::find(20)->price,
                'order_id' => 12,
                'created_at' => '2019-08-30 19:07:01',
            ],
            [
                'product_id' => 6,
                'quantity' => 2,
                'unit_price' => \App\Product::find(6)->price,
                'order_id' => 13,
                'created_at' => '2019-08-28 20:33:01',
            ],
            [
                'product_id' => 17,
                'quantity' => 3,
                'unit_price' => \App\Product::find(17)->price,
                'order_id' => 13,
                'created_at' => '2019-08-28 20:33:01',
            ],
            [
                'product_id' => 37,
                'quantity' => 1,
                'unit_price' => \App\Product::find(37)->price,
                'order_id' => 13,
                'created_at' => '2019-08-28 20:33:01',
            ],
            [
                'product_id' => 24,
                'quantity' => 2,
                'unit_price' => \App\Product::find(24)->price,
                'order_id' => 13,
                'created_at' => '2019-08-28 20:33:01',
            ],
            [
                'product_id' => 31,
                'quantity' => 2,
                'unit_price' => \App\Product::find(31)->price,
                'order_id' => 14,
                'created_at' => '2019-06-12 13:43:34',
            ],
            [
                'product_id' => 21,
                'quantity' => 1,
                'unit_price' => \App\Product::find(21)->price,
                'order_id' => 14,
                'created_at' => '2019-06-12 13:43:34',
            ],
            [
                'product_id' => 32,
                'quantity' => 3,
                'unit_price' => \App\Product::find(32)->price,
                'order_id' => 14,
                'created_at' => '2019-06-12 13:43:34',
            ],
            [
                'product_id' => 22,
                'quantity' => 1,
                'unit_price' => \App\Product::find(22)->price,
                'order_id' => 15,
                'created_at' => '2019-06-05 20:18:44',
            ],
            [
                'product_id' => 17,
                'quantity' => 1,
                'unit_price' => \App\Product::find(17)->price,
                'order_id' => 15,
                'created_at' => '2019-06-05 20:18:44',
            ],
            [
                'product_id' => 15,
                'quantity' => 1,
                'unit_price' => \App\Product::find(15)->price,
                'order_id' => 15,
                'created_at' => '2019-06-05 20:18:44',
            ],
            [
                'product_id' => 33,
                'quantity' => 1,
                'unit_price' => \App\Product::find(33)->price,
                'order_id' => 15,
                'created_at' => '2019-06-05 20:18:44',
            ],
            [
                'product_id' => 20,
                'quantity' => 1,
                'unit_price' => \App\Product::find(20)->price,
                'order_id' => 16,
                'created_at' => '2019-09-20 17:45:55',
            ],
            [
                'product_id' => 37,
                'quantity' => 2,
                'unit_price' => \App\Product::find(37)->price,
                'order_id' => 16,
                'created_at' => '2019-09-20 17:45:55',
            ],
            [
                'product_id' => 40,
                'quantity' => 1,
                'unit_price' => \App\Product::find(40)->price,
                'order_id' => 16,
                'created_at' => '2019-09-20 17:45:55',
            ],
            [
                'product_id' => 15,
                'quantity' => 1,
                'unit_price' => \App\Product::find(15)->price,
                'order_id' => 17,
                'created_at' => '2019-07-24 18:25:46',
            ],
            [
                'product_id' => 28,
                'quantity' => 1,
                'unit_price' => \App\Product::find(28)->price,
                'order_id' => 17,
                'created_at' => '2019-07-24 18:25:46',
            ],
            [
                'product_id' => 26,
                'quantity' => 2,
                'unit_price' => \App\Product::find(26)->price,
                'order_id' => 17,
                'created_at' => '2019-07-24 18:25:46',
            ],
            [
                'product_id' => 31,
                'quantity' => 1,
                'unit_price' => \App\Product::find(31)->price,
                'order_id' => 17,
                'created_at' => '2019-07-24 18:25:46',
            ],
            [
                'product_id' => 3,
                'quantity' => 2,
                'unit_price' => \App\Product::find(3)->price,
                'order_id' => 18,
                'created_at' => '2019-08-21 07:07:01',
            ],
            [
                'product_id' => 25,
                'quantity' => 2,
                'unit_price' => \App\Product::find(25)->price,
                'order_id' => 18,
                'created_at' => '2019-08-21 07:07:01',
            ],
            [
                'product_id' => 31,
                'quantity' => 1,
                'unit_price' => \App\Product::find(31)->price,
                'order_id' => 18,
                'created_at' => '2019-08-21 07:07:01',
            ],
            [
                'product_id' => 26,
                'quantity' => 1,
                'unit_price' => \App\Product::find(26)->price,
                'order_id' => 18,
                'created_at' => '2019-08-21 07:07:01',
            ],
            [
                'product_id' => 19,
                'quantity' => 2,
                'unit_price' => \App\Product::find(19)->price,
                'order_id' => 19,
                'created_at' => '2019-08-27 14:05:00',
            ],
            [
                'product_id' => 6,
                'quantity' => 1,
                'unit_price' => \App\Product::find(6)->price,
                'order_id' => 19,
                'created_at' => '2019-08-27 14:05:00',
            ],
            [
                'product_id' => 11,
                'quantity' => 1,
                'unit_price' => \App\Product::find(11)->price,
                'order_id' => 19,
                'created_at' => '2019-08-27 14:05:00',
            ],
            [
                'product_id' => 30,
                'quantity' => 2,
                'unit_price' => \App\Product::find(30)->price,
                'order_id' => 19,
                'created_at' => '2019-08-27 14:05:00',
            ],
            [
                'product_id' => 9,
                'quantity' => 2,
                'unit_price' => \App\Product::find(9)->price,
                'order_id' => 20,
                'created_at' => '2019-07-23 15:44:17',
            ],
            [
                'product_id' => 32,
                'quantity' => 1,
                'unit_price' => \App\Product::find(32)->price,
                'order_id' => 20,
                'created_at' => '2019-07-23 15:44:17',
            ],
            [
                'product_id' => 3,
                'quantity' => 1,
                'unit_price' => \App\Product::find(3)->price,
                'order_id' => 20,
                'created_at' => '2019-07-23 15:44:17',
            ],
            [
                'product_id' => 31,
                'quantity' => 1,
                'unit_price' => \App\Product::find(31)->price,
                'order_id' => 20,
                'created_at' => '2019-07-23 15:44:17',
            ],
        ]);
    }
}
