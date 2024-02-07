<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // ! pemberian ijin table agar dpt menyimpan data (FILLable)
    protected $fillable = [
        'image',
        'title',
        'content',
    ];
}
