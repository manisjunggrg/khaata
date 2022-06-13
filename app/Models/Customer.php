<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table='customer';
    protected $fillable=[
        'name','address','phonenumber','email','image'
    ];
    public function Due(){
        return $this->hasMany(Due::class);
    }
    public function totalUnpaid(){
        return $this->Due()->where('status',2)->sum('amount');
    }
}
