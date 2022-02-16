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
}
