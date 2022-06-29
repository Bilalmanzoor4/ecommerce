<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'productname' => Str::random(10),
            'productcategory' => Str::random(10),
            'productprice' => Str::random(10),
            'img' => Str::random(10),
        ]);
    }
}
