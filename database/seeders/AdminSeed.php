<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->truncate();
        DB::table('admin')->insert([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
