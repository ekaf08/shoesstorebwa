<?php

namespace App\Models;

use App\Models\Shoes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductTransaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];
    protected $table = 'product_transactions';

    public function shoes(): BelongsTo
    {
        return $this->belongsTo(Shoes::class, 'shoes_id');
    }

    public function promoCode(): BelongsTo
    {
        return $this->belongsTo(Promocode::class, 'promo_code_id');
    }

    public static function generateUniqueTrxId()
    {
        $prefix = 'AKA';
        do {
            $randomString = $prefix . mt_rand(1000, 999);
        } while (self::where('booking_trx_id', $randomString)->exists());

        return $randomString;
    }
}
