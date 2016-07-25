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
    protected $hidden = [];

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
        $user->name = $user_object->name;
        $user->email = $user_object->email;

        $user->save();

        return $user;
    }
}
