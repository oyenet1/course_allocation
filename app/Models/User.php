<?php

namespace App\Models;

use App\Traits\HasManyAllocation;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasFactory, Notifiable, HasManyAllocation;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'title',
        'email',
        'password',
        'username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public static function boot()
    {
        parent::boot();

        // create a profile together with user_error
        self::created(function ($user) {
            // $user->update(['role' => $user->roles ? $user->roles[0]->name : null]);
            $user->profile()->create([]);
            // $user->attachRole(2);
        });

        // detach roles from user when deleted
        self::deleted(function ($user) {
            $user->detachRoles($user->roles);
        });
    }

    // relationship between roles and users
    function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}