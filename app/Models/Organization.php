<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        "name",
        "inn" ,
        "kpp",
        "legal_address" ,
        "mailing_address",
        "checking_account",
        "correspondent_account",
        "number_ati"
    ];

    public function transportations()
    {
        return $this->hasMany(Transportation::class);
    }
}
