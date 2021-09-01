<?php

namespace App\Models;

use App\Models\Deal;
use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DealType extends Model
{
    use HasFactory, UsesUuid;

    protected $guarded = [];

    protected $with = ['deal'];

    // protected $fillable = ['user_id', 'category_id', 'subcategory_id', 'title','description','tags', 'boosted','status'];
    
    public $timestamps = false;

    public function setTypeAttribute($value){
        $this->attributes['type'] = ucwords($value);
    }

    /**
     * Get the deal that owns the DealType
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function deal(): BelongsTo
    {
        return $this->belongsTo(Deal::class);
    }

    public function getServiceFeeAndVatAttribute(){
        return $this->price * 20/100;
    }

    public function getTotalAttribute(){
        return $this->price + $this->serviceFeeAndVat;
    }





}
