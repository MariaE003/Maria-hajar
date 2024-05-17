<?php

namespace App\Http\Controllers;

use App\Models\Precense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon; // Importer la classe Carbon pour la manipulation des dates
class PrecenseController extends Controller
{
    public function getData() {
        // $data = Projet::where('id', '=', 1)->with('stagiaire')->get();
        $data = Precense::paginate(6);
        // $data = Projet::with('stagiaire')->get();
        return view('pages/listPres', ['stagiaires' => $data]);
    }
    //
    public function insertData(Request $request){
        
        $stgId = Auth::id();
        if ($stgId){
            $Stagiaire = new Precense();
            $Stagiaire->dateAct = $request->dateAct;
            $Stagiaire->heureArr = $request->heureArr;
            $Stagiaire->heureDep = $request->heureDep;

                
            $Stagiaire->idUser = $stgId;        
            $Stagiaire->save(); 
            
            return redirect('/donePresence');
            // status     
            
        }else{
            echo 'non trouver';
            // return redirect()->route('error')->with('message', 'Utilisateur non trouvé.');
        }
        
        
        }


        

        public function showPresence(Request $request) {
            // Récupérer la date sélectionnée depuis le formulaire
            $selectedMonth = $request->input('selected_month');
    
            // Vérifier si un mois a été sélectionné
            if (!empty($selectedMonth)) {
                // Créer une instance Carbon pour le premier jour du mois sélectionné
                $selectedDate = Carbon::createFromFormat('m', $selectedMonth)->startOfMonth();
    
                // Filtrer les présences en fonction du mois sélectionné
                $stagiaires = Precense::whereMonth('dateAct', $selectedDate->month)
                                       ->whereYear('dateAct', $selectedDate->year)
                                       ->paginate(6);
    
                // Passer les données à la vue
                return view('pages/listPres', ['stagiaires' => $stagiaires]);
            } else {
                // Si aucun mois n'a été sélectionné, rediriger avec un message d'erreur
                return redirect()->back()->with('error', 'Veuillez sélectionner un mois.');
            }
        }
// public function showPresence(Request $request) {
//     // Récupérer la date sélectionnée depuis le formulaire
//     $selectedMonth = $request->input('selected_month');

//     // Créer une instance Carbon pour la date sélectionnée
//     $selectedDate = Carbon::parse($selectedMonth);

//     // Filtrer les présences en fonction du mois sélectionné
//     $stagiaires = Precense::whereMonth('dateAct', $selectedDate->month)
//                            ->whereYear('dateAct', $selectedDate->year)
//                            ->paginate(6);

//     // Passer les données à la vue
//     return view('pages/listPres', ['stagiaires' => $stagiaires]);
// }
        // public function showPresence(Request $request) {
        //     $selectedDate = $request->input('selected_date');
        //     $stagiaires = Precense::whereDate('dateAct', $selectedDate)->paginate(6);
        
        //     return view('pages/listPres', ['stagiaires' => $stagiaires]);
        // }
        
       
    
        // Autres méthodes du contrôleur...
    
      



    
}


