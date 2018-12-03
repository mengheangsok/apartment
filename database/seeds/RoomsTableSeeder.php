<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
        	'name' => 'Room Default',
        	'price' => 500,
            'description' => 'This is the content description',
            'category_id' => factory(\App\Category::class)->id,
        ]);
    }
}
