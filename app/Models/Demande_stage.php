<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Demande_stage extends Model
{
    use HasFactory;
    
    protected $fillable=['iddemande','name','phone','dateNias','adress','etablissement','dateD','dateF','status','idStg'];

   
}
