<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'desired_date',
        'remarks',
        'packaging_return',
        'user_id',
        'product',
        'volume',
        'packaging',
        'packaging_return'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
