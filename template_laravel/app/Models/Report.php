<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'station',
        'place',
        'x_num',
        'y_num',
        'detail',
        'quantity',
        'whose',
        'action',
        'remarks',
        'file_paths'
    ];
}
