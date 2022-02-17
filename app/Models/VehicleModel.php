<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    use HasFactory;

    public $fillable = [
        'brand_id',
        'vehicle_type_id',
        'name'
    ];

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
