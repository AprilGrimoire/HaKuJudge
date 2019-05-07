<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Submission extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function problem()
    {
        return $this->belongsTo(Problem::class);
    }
}
