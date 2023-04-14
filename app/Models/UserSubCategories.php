<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubCategories extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'sub_categories_id',
    ];

}
