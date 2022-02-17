<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    public $fillable = [
        'vehicle_id',
        'transaction_id',
        'days_rented',
        'start_dt',
        'end_dt',
        'date_returned',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function addOns()
    {
        return $this->hasMany(AddOn::class);
    }
}
