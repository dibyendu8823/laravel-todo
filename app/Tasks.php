<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'description',
        'working_date',
        'public_status',
    ];
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
