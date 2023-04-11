<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['event_name'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function medias(){
        return $this->hasMany(VisitorMedia::class);
    }
    public function robot(){
        return $this->belongsTo(Robot::class);
    }
}
