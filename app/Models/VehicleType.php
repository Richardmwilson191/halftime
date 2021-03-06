<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    use HasFactory;

    public $fillable = [
        'type'
    ];

    public function vehicleModels()
    {
        return $this->hasMany(VehicleModel::class);
    }
}
