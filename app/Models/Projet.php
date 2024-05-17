<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $table = 'projets';
    protected $fillable=['id','titreProjet','dateDebut','dateFin','status','description','idUser'];

    public function stagiaire()
    {
        return $this->belongsTo(User::class, 'idUser');
    }
}
