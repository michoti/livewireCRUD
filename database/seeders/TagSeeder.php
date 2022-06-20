<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'name'        => 'PHP',
                'slug'        => 'PHP',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Laravel',
                'slug'        => 'laravel',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Livewire',
                'slug'        => 'livewire',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
