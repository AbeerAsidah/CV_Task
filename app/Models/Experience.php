<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'organization', 'role', 'start_date', 'end_date'
    ];
}
