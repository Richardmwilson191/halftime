<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public $fillable = [
        'vehicle_model_id',
        'color',
        'capacity',
        'plate_number',
        'chassis_number',
        'cost_per_day',
        'is_available'
    ];

    public function vehicleModels()
    {
        return $this->belongsTo(VehicleModel::class);
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
