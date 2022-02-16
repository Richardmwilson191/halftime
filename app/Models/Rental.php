<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'vehicle_id',
        'transaction_id',
        'days_rented',
        'start_dt',
        'end_dt',
        'date_returned',
    ];
}
