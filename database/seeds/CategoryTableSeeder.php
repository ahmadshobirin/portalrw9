<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'category' => 'sekilas info',
            'slug' => 'sekilas-info'
        ]);

        DB::table('category')->insert([
            'category' => 'cakrawala',
            'slug' => 'cakrawala'
        ]);

        DB::table('category')->insert([
            'category' => 'wacana',
            'slug' => 'wacana'
        ]);

        DB::table('category')->insert([
            'category' => 'rembug warga',
            'slug' => 'rembug-warga'
        ]);
    }
}
