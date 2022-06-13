<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_name','detail','price','image'
    ];
    public function due(){
        return $this->hasMany(Due::class);
    }
}
