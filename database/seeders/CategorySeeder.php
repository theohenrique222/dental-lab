<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert(
            [
                [
                    'category' => 'Implante'
                ],
                [
                    'category' => 'Porcelana'
                ],
            ],
        );
    }
}
