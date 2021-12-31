<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'payed_at',
    ];
    // usar atributo $dates para poder usar este campo por Carbon
    protected $dates = [
        'payed_at',
    ];

}
