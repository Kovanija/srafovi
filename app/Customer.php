<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'pib', 'location', 'customer_type'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
