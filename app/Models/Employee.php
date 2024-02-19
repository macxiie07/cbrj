<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'people_id',
        'position_id',
        'hire_date',
        'base_pay',
        'allowance',
        'account_status',
        'remarks',
    ];
}