<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    //
    public function insertData(Request $request){
        
        $stgId = Auth::id();
        if ($stgId){
            $Stagiaire = new Feedback();
            $Stagiaire->satisfaction = $request->satisfaction;
            $Stagiaire->comment = $request->comment;

                
            $Stagiaire->idUser = $stgId;        
            $Stagiaire->save(); 
            
            return redirect('/FeedbackReussite');
            // status     
            
        }else{
            echo 'non trouver';
            // return redirect()->route('error')->with('message', 'Utilisateur non trouvé.');
        }
        
        
        }

//         public function getData()
// {
//     // Obtenir le nombre de réponses de satisfaction par degré (de 1 à 5)
//     $satisfactionParDegre = Feedback::selectRaw('satisfaction, COUNT(*) as total')
//         ->groupBy('satisfaction')
//         ->orderBy('satisfaction')
//         ->get();

//     // Créer un tableau final avec les degrés de satisfaction et les totaux pour l'affichage dans le graphique
//     $data = $satisfactionParDegre->map(function ($item) {
//         return [
//             'degre' => $item->degre_satisfaction,
//             'total' => $item->total,
//         ];
//     });

//     return response()->json($data);
// }


public function index()
{
    return view('pages/statistiqueFeedback');
}

public function getData()
{
    $satisfactionParDegre = Feedback::selectRaw('satisfaction, COUNT(*) as total')
        ->groupBy('satisfaction')
        ->orderBy('satisfaction')
        ->get();

    $data = $satisfactionParDegre->map(function ($item) {
        return [
            'degre' => $item->satisfaction,
            'total' => $item->total,
        ];
    });

    return response()->json($data);
}

}
