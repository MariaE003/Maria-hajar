<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Precense extends Model
{
    use HasFactory;
    protected $fillable=['id','dateAct','heureArr','heureDep','iddemande'];

    public function stagiaire()
    {
        return $this->belongsTo(User::class, 'idUser');
    }

}
