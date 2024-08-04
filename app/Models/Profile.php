<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Profile extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'email', 'phone', 'location', 'social_links', 'interests'
    ];

    // إذا كان لديك JSON أو بيانات غير مترابطة في قاعدة البيانات، تأكد من تحويلها بشكل صحيح
    protected $casts = [
        'social_links' => 'array',
    ];
}
