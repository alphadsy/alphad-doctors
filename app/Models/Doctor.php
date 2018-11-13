<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $guarded=[];

    // get doctor user information
    public function user() {
        return $this->belongsTo(User::class);
    }

}
