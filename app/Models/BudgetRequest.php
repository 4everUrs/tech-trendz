<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'origin', 'category','account', 'amount','desc','status',
    ];
}
