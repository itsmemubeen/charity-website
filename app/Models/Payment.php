<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;


    public function countDonation(){
        $data = Payment::sum('amount');
        if($data > 0){
            return $data;
        }
    }

    public static function raisedAmount($id)
    {
        $data = Payment::where('donation_id', $id)->sum('amount');
        if ($data) {
            return $data;
        }
        return 0;
    }
}
