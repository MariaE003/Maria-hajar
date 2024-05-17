<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=['id','name','email','message','idUser'];

    // public function stagiaire()
    // {
    //     return $this->belongsTo(User::class, 'idUser');
    // }

}
