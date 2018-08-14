<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $fillable = ['place_name', 'category', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
