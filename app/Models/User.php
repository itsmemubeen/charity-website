<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';

    protected $fillable = [
        'f_name',
        'l_name',
        'country',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function countUsers()
    {
        $data = User::all()->count();
        if ($data) {
            return $data;
        }
        return 0;
    }
    public function petitions()
    {
        return $this->hasMany('App\Models\Petition', 'user_id', 'id');
    }

    public function engagedUsers(){
        $result = DB::table('Users')
        ->select('user_id')
        ->distinct()
        ->count();

        return $result;
    }
}