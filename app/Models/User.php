<?php

namespace App\Models;

use App\Models\Deal;
use App\Traits\UsesUuid;
use App\Models\DealFavourite;
use Laravel\Scout\Searchable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use App\Notifications\VerifyEmailNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Notifications\SendPasswordResetNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable implements HasMedia, MustVerifyEmail
{
    use HasFactory, Notifiable, Searchable;
    use UsesUuid, HasMediaTrait;

    protected $fillable = [
        'name', 'username', 'phone', 'email', 'password', 'email_verified_at',
        'pid', 'country_id', 'gender', 'dob', 'language', 
        'status', 'registration_completed','short_description', 
        'long_description', 'skillset', 'languages'

    ];

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'dob' => 'date',
        'languages' => 'array'
    ];

    public function setSkillsetAttribute($skillset){
        $this->attributes['skillset'] = \implode($skillset, ',');
    }

    public function getSkillsetAttribute($skillset){
       return empty($skillset) ? [] : explode(',', $skillset);
    }

    public function setLanguagesAttribute($languages){
        $this->attributes['languages'] = json_encode($languages);
    }

    public function getLanguagesAttribute($languages){
        return empty($languages) ? []: json_decode($languages, true);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new sendPasswordResetNotification($token));
    }

    public function sendEmailVerificationNotification(){
        $this->notify(new VerifyEmailNotification($this));
    }


    public function deals(): HasMany
    {
        return $this->hasMany(Deal::class)->orderBy('created_at','desc');
    }

    public function dealFavourites(): HasMany
    {
        return $this->hasMany(DealFavourite::class)->orderBy('created_at','desc');
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('profile')
            ->singleFile();
    }

    public function isFavouriteDeal($deal_id){
        return in_array($deal_id, $this->dealFavourites->pluck('id')->toArray());
    }
}
