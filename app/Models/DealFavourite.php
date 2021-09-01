<?php

namespace App\Models;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DealFavourite extends Model
{
    use HasFactory, UsesUuid;

    protected $fillable = ['user_id', 'deal_id'];

    public function deal(): BelongsTo
    {
        return $this->belongsTo(Deal::class);
    }
}
