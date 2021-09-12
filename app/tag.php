<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    //
    protected $fillable = ['name','info'];
    public function bookmarks()
    {
        return $this->hasMany(bookmark::class);
    }
}
