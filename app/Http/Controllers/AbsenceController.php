<?php

// namespace App\Http\Controllers;

// use App\Models\Absence;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class AbsenceController extends Controller
// {
//     public function getData() {
//         // $data = Projet::where('id', '=', 1)->with('stagiaire')->get();
//         $data = Absence::paginate(6);
//         // $data = Projet::with('stagiaire')->get();
//         return view('pages/suiviDemandeAbs', ['stagiaires' => $data]);
//     }
//     //
//     public function insertData(Request $request){
        
//         $stgId = Auth::id();
//         if ($stgId){
//             $Stagiaire = new Absence();
//             $Stagiaire->dateDebut = $request->dateDebut;
//             $Stagiaire->dateFin = $request->dateFin;
//             $Stagiaire->motif = $request->motif;


                
//             $Stagiaire->idUser = $stgId;        
//             $Stagiaire->save(); 
            
//             return redirect('/doneAbsence');
            
//         }else{
//             echo 'non trouver';
//         }
        
        
//         }
//     public function accepter($id){
//         $data=Absence::where('id',$id )->update(['status' => 'accepter' ]);
//         return redirect('/suiviDemandeAbs');
//         // return view('pages/espace_stagiaire', ["stagiaires"=>$data]);        
//     }
//     public function refuser($id){
//         Absence::where('id',$id )->update(['status' => 'refuser' ]);
//         return redirect('/suiviDemandeAbs');
//     }
// }








namespace App\Http\Controllers;

use App\Models\Absence;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsenceController extends Controller
{
    public function getData() {
        $data = Absence::paginate(6);
        return view('pages/suiviDemandeAbs', ['stagiaires' => $data]);
    }

    public function insertData(Request $request){
        $stgId = Auth::id();
        if ($stgId){
            $Stagiaire = new Absence();
            $Stagiaire->dateDebut = $request->dateDebut;
            $Stagiaire->dateFin = $request->dateFin;
            $Stagiaire->motif = $request->motif;
            $Stagiaire->idUser = $stgId;        
            $Stagiaire->save(); 
            return redirect('/doneAbsence');
        }else{
            echo 'non trouver';
        }
    }

    public function accepter($id){
        $data = Absence::find($id);
        $data->status = 'accepter';
        $data->save();
        return redirect('/suiviDemandeAbs');
    }

    public function refuser($id){
        $data = Absence::find($id);
        $data->status = 'refuser';
        $data->save();
        return redirect('/suiviDemandeAbs');
    }

    public function searchAbs(Request $request){
        $stg = User::whereHas('absences', function($query) use ($request) {
            $query->whereHas('stagiaire', function($subquery) use ($request) {
                $subquery->where('name', 'like', '%' . $request->name . '%');
            });
        })->paginate(6);
        
        foreach ($stg as $absence) {
            if ($absence->stagiaire) {
                // Si la relation stagiaire est définie, accédez à la propriété name
                echo $absence->stagiaire->name;
            }
        }
        return view('pages/suiviDemandeAbs', ['stagiaires' => $stg]);
    }
    
    
    // public function searchAbs(Request $request){
    //     $stg =Absence::where('name', '=', $request->name)->paginate(6);
    //     // if (empty($stg)){
    //     //    echo '<p>Aucun stagiaire trouvé.</p>'; 
    //     // } 
    //     // else{
    //         return view('pages/suiviDemandeAbs', ['stagiaires' => $stg]);
    //     // }
        
    // }
}
