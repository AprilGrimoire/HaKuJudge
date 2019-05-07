<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    //
    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
