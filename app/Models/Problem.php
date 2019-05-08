<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    public function digest()
    {
        return md5(base64_encode($this->testdata));
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
