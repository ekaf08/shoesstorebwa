<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Category;
use App\Models\ShoesSize;
use App\Models\ShoesPhoto;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shoes extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category id');
    }

    public function photos(): HasMany
    {
        return $this->hasMany(ShoesPhoto::class);
    }

    public function sizes(): HasMany
    {
        return $this->hasMany(ShoesSize::class);
    }
}
