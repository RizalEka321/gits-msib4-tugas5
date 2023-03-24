<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'qty',
        'product_id',
        'sub_total'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
