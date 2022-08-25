<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'donations';

    protected $fillable = ['user_id', 'd_title', 'd_desc', 'd_amount', 'image'];

    public static function countDonation()
    {
        $data = Donation::all()->count();
        if ($data) {
            return $data;
        }
        return 0;
    }
    public function members()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function sumdonation()
    {
        return Donation::sum('d_amount');
    }

    public static function countDonationRaising($id)
    {
        $data = Donation::where('user_id', $id)->sum('d_amount');
        if ($data) {
            return $data;
        }
        return 0;
    }
}