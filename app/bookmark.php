<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookmark extends Model
{
    //
    protected $fillable=['url','comment','tag_id','user_id','public'];
    public function tag()
    {
        return $this->belongsTo(tag::class);
    }
}
