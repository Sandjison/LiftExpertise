<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $table = 'subscriptions';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'gender',
        'payment_number',
        'plan',
        'contact',
        'amount',
        'payment_type',
        'total',
    ];

   
}
