<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymentMethod extends Model {
    use HasFactory;

    const TYPE_CREDIT_CARD = 'credit_card';
    const TYPE_BANK_ACCOUNT = 'bank_account';

    protected $fillable = [
        'uuid',
        'customer_id',
        'type',
    ];

    public function customer(): BelongsTo {
        return $this->belongsTo(Customer::class);
    }
}
