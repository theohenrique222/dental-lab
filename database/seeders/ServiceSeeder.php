<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name' => 'Coroa de Porcelana', 
                'price' => 500.00, 'description' => 'Coroa feita de porcelana de alta qualidade.'
            ],
            [   'name' => 'Ponte Fixa', 
                'price' => 800.00, 'description' => 'Ponte fixa com ótima durabilidade.',
            ],
        ]);
    }
}
