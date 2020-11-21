<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Status;
use App\Models\Lesson;
use App\Models\StatusAccount;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Laratrust\Traits\LaratrustUserTrait;
use App\Models\Posts;
use App\RoleUser;
class User extends Authenticatable implements JWTSubject
{
    use LaratrustUserTrait;
    use Notifiable;

    protected $table = 'users';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function lesson() {
        return $this->hasMany(Lesson::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function status_account()
    {
        return $this->belongsTo(StatusAccount::class);
    }

    public function roleuser()
    {
        return $this->hasOne(RoleUser::class);
    }

    public function posts()
    {
        return $this->hasMany(Posts::class);
    }
}