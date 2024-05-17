<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjetController extends Controller
{
    public function getData() {
        // $data = Projet::where('id', '=', 1)->with('stagiaire')->get();
        $data = Projet::paginate(8);
        // $data = Projet::with('stagiaire')->get();
        return view('pages.avancementDuProjet', ['data' => $data]);
    }

    public function insertData(Request $request){
        
        $stgId = Auth::id();
        if ($stgId){
            $Stagiaire = new Projet();
            $Stagiaire->titreProjet = $request->titreProjet;
            $Stagiaire->dateDebut = $request->dateDebut;
            $Stagiaire->dateFin = $request->dateFin;
            $Stagiaire->status = $request->status;
            $Stagiaire->description = $request->description;

                
            $Stagiaire->idUser = $stgId;        
            $Stagiaire->save(); 
            
            // return redirect('/donePresence');
            return 'status';     
            
        }else{
            echo 'non trouver';
            // return redirect()->route('error')->with('message', 'Utilisateur non trouvé.');
        }
        
        
        }
        public function search(Request $request){
            
            $data=Projet::where('name', '=', $request->name)->get()->paginate(8);
            if ($data) {
                return view('pages/avancementDuProjet',['data'=>$data]);
            }else{
                echo `<h1>rien</h1>`;
            }
            
        }
}
