<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
