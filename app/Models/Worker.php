<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $fillable = [
    'name',
    'phone',
    'email',
    'position_id',
    'organization_id',
];
}
