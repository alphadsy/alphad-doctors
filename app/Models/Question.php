<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded=[];

    // get user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // get question answers
    public function answers() {
        return $this->hasMany(Answer::class);
    }

}
