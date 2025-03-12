<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShoesPhoto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'shoes_photos';
    protected $guarded = ['id'];
}
