<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddOn extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'desc',
        'cost',
    ];

    public function rentalAddOn()
    {
        return $this->belongsTo(RentalAddOn::class);
    }
}
