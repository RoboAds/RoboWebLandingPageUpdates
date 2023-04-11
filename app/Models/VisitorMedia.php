<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorMedia extends Model
{
    use HasFactory;
    protected $table = 'visitor_medias';

    public function user(){
        return $this->hasMany(User::class);
    }
}
