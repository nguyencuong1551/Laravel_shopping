<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo('app\Product', 'id_product');
    }
}

