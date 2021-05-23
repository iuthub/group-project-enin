<?php

namespace App\Models;

use App\Notifications\ContactUs;
use Illuminate\Auth\Access\Gate;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use  HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'username',
        'email',
        'password',
        'phoneNumber',
        'birthdate',
        'passport',
        'city',
        'postalCode',
    ];

    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }

    public function checkModerator()
    {

        return DB::table('moderators')->where("user_id", $this->id)->first();
    }

    public static function getModerator(){
       return User::select('users.*')->join('moderators','user_id','users.id')->first();
    }
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

    public function getToken()
    {

        if ($this->checkModerator() != null) {
            $this->auth_token = $this->createToken("api_token", ["server:announcment"])->plainTextToken;
            return true;
        }
        $this->auth_token = $this->createToken("api_token", ["server:announcment"])->plainTextToken;
        return false;
    }
}
