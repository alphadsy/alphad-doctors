<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded=[];

    // get doctor information
    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

}
