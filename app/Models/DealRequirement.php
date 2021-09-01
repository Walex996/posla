<?php

namespace App\Models;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealRequirement extends Model
{
    use HasFactory, UsesUuid;

    protected $guarded = [];

    public $timestamps = false;

}
