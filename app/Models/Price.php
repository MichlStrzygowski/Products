<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    public const VALIDATION_STORE_RULES = [
        'price' => 'required|regex:/^(([0-9]*)(\.([0-9]+))?)$/', // regex for price
        'version' => 'required|string|min:3|max:120',
    ];

    public const VALIDATION_UPDATE_RULES = [
        'price' => 'regex:/^(([0-9]*)(\.([0-9]+))?)$/',
        'version' => 'string|min:3|max:120',
    ];

    protected $fillable = [
        'product_id',
        'price',
        'version',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
