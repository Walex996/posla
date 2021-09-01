<?php

namespace App\Models;

use App\Models\Project;
use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use UsesUuid;

    protected $fillable = ['name', 'slug', 'position', 'description', 'status', 'parent_id'];

    public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
    }

    /**
     * Get the parent that owns the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo($this, 'parent_id');
    }

    /**
     * Get all of the children for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children(): HasMany
    {
        return $this->hasMany($this, 'parent_id', 'id');
    }

    /**
     * Get all of the deals for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function deals(): HasMany
    {
        return $this->hasMany(Deal::class);
    }

    /**
     * Get all of the projects for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
