<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'invoice',
        'c_name',
        'date',
        'address',
        'phone',
        'booked_by',
        'deliver_by',
    ];
}
