<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'access_token', 'refresh_token'
    ];

    /**
     * Create user from Socialite object if not exist.
     *
     * @var object
     */
    public static function createIfNotExist($user_object) {
        if ($user = self::find($user_object->id)) {
            return $user;
        }

        $user = new self;
        $user->id = $user_object->id;
        $user->username = $user_object->username;
        $user->firstname = $user_object->firstname;
        $user->lastname = $user_object->lastname;
        $user->email = $user_object->email;
        $user->isadmin = $user_object->isadmin;

        $user->access_token = $user_object->token;
        $user->refresh_token = $user_object->refreshToken;
        $user->access_token_expire = date("Y-m-d H:i:s", time() + $user_object->expiresIn);

        $user->save();

        return $user;
    }
}
