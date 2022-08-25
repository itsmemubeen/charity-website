<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $table = 'goals';

    protected $fillable = ['goal_name', 'goal_slug'];

    public static function countGoals()
    {
        $data = Goal::all()->count();
        if ($data) {
            return $data;
        }
        return 0;
    }
    public static function goalName($id)
    {
        $data = Goal::find($id);
        if ($data) {
            return $data->goal_name;
        }
        return 0;
    }
}