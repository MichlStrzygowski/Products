<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public const VALIDATION_STORE_RULES = [
        'name' => 'required|string|max:255|min:3',
        'description' => 'required|string|min:3',
    ];

    public const VALIDATION_UPDATE_RULES = [
        'name' => 'string|max:255|min:3',
        'description' => 'string|min:3',
    ];

    protected $fillable = [
        'name', // string
        'description', // text
    ];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
