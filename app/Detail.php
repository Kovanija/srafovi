<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'dim1', 'dim2', 'dim3', 'pack', 'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // protected static function booted()
    // {
    //     static::addGlobalScope('order', function (Builder $builder) {
    //         $builder->orderByRaw('length(dim1), dim1');
    //     });
    // }
}
