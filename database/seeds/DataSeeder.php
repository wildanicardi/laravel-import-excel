<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'farhan',
            'email' => 'farhan@gmail.com',
            'password' => bcrypt('1234567'),
            'alamat' => 'Surabaya',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('produks')->insert([
            'user_id' => 1,
            'sku_id' => '181068',
            'produk' => 'Bluetooth Stereo Headset',
            'harga' => 182000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('produks')->insert([
            'user_id' => 1,
            'sku_id' => '181013',
            'produk' => 'Charger Aki Portable 6A/12V',
            'harga' => 232000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('orders')->insert([
            'user_id' => 1,
            'qty' => 1,
            'produk_id' => 1,
            'pembayaran' => 'COD',
            'orderid' => 'ZQCS7-RJL-1906103232',
            'status' => 'Proses Order',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('orders')->insert([
            'user_id' => 1,
            'qty' => 1,
            'produk_id' => 2,
            'pembayaran' => 'COD',
            'orderid' => 'ZQCS8-AMU-1906108226',
            'status' => 'Proses Order',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('invoices')->insert([
            'user_id' => 1,
            'order_id' => 1,
            'total' => 182000,
            'Keterangan' => 'Proses ',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 50; $i++){
 
            
            DB::table('produks')->insert([
                'user_id' =>1,
                'sku_id' => '1810'.Str::random($i),
                'produk' => $faker->sentence(),
                'harga' => $faker->numberBetween(100000,400000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

      }
    }
}
