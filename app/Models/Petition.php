<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;
    protected $table = 'petitions';

    protected $fillable = ['user_id', 'p_title', 'p_desc', 'image'];

    public static function countPetitions()
    {
        $data = Petition::all()->count();
        if ($data) {
            return $data;
        }
        return 0;
    }

    public static function countPetitionsByUser($id)
    {
        $data = Petition::Where('user_id', $id)->count();
        if ($data) {
            return $data;
        }
        return 0;
    }

    public function members()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}