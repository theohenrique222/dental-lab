<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    use HasFactory;
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function create(): void
    {
        //
    }
}
