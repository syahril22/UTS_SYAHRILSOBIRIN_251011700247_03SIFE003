<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'name',
        'region',
        'description',
        'image',
        'ticket_price',
    ];

    protected function casts(): array
    {
        return [
            'ticket_price' => 'integer',
        ];
    }
}

