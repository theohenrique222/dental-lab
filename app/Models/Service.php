<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function create(): void
    {
        Service::create([
            'name' => 'Coroa de Porcelana',
            'price' => 500.00,
            'description' => 'Coroa feita de porcelana de alta qualidade.'
        ]);

        
    }
}
