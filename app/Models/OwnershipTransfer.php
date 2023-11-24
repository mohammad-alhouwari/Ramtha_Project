<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnershipTransfer extends Model
{
    use HasFactory;
    protected $fillable = [
        'landlord_phone',
        'new_owner_name',
        'new_owner_phone',
        'national_id',
        'property_number',
        'municipality_name',
        'basin',
        'district',
        'land_number',
    ];
}
