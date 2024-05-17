<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Absence extends Model
// {
//     use HasFactory;
//     protected $fillable=['id','dateDebut','dateFin','motif','idUser'];

//     public function stagiaire()
//     {
//         return $this->belongsTo(User::class, 'idUser');
//     }
// }





namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;

    protected $fillable=['id','dateDebut','dateFin','motif','idUser', 'status'];

    public function stagiaire()
    {
        return $this->belongsTo(User::class, 'idUser');
    }
}
