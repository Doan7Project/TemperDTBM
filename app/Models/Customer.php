<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $primaryKey = "id";
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'password',
        'phone',
        'birthday',
        'country',
        'city',
        'address',
    ];

    public function order_masters(){
        return $this->hasMany(order_master::class,'customer_id','id');
    }
}
