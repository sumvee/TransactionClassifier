<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'description',
    ];

    protected $casts = [
        'date' => 'datetime',
        'amount' => 'float',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
