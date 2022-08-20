<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'amount','memo','updated_at','created_at'];
}
