<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    const Indeks = [
        '0' => 'A',
        '1' => 'Ab',
        '2' => 'B',
        '3' => 'Bc',
        '4' => 'C',
        '5' => 'D',
        '6' => 'E',
    ];
    
    protected $fillable = [
        'name',
        'nilai',
        'indeks'
    ];

    
}
