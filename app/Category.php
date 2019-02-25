<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'user_id',
        'category_name',
        'public_status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function tasks()
    {
        return $this->hasMany('App\Tasks', 'category_id');
    }
}
