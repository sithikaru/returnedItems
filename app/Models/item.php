<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

    protected $fillable = [
        "agency_name",
        "address",
        "item_code",
        "item_name",
        "qty"
    ];
}
