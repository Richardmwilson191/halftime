<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalAddOn extends Model
{
    use HasFactory;

    public $fillable = [
        'rental_id',
        'add_on_id'
    ];

    public function addOn()
    {
        return $this->hasMany(AddOn::class);
    }

    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }
}
