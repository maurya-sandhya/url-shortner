<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model {
    use HasFactory;
    protected $fillable = ['short_code', 'long_url', 'user_id'];
}
