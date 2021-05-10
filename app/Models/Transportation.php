<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    protected $fillable = [
        "track_number",

        "organization_id" ,
        "num_contract_application",
        "date_creation" ,
        "start_point",
        "end_point",
        "interval",
        "rate_nds",
        "rate_no_nds",
        "cost_per_kilometer",
        "date_departure",
        "date_arrival",
    ];


public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
