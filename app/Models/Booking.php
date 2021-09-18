<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'lastname','phone','email','numpeople','roomtype'
    ];



    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
    public function adventure()
    {
        return $this->belongsTo(Adventure::class);
    }

}



