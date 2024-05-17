<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use App\Models\Demande_stage;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // 
    public function getData(){
        $stagiaires = User::where('role', 'stagiaire')->get();
        
        return redirect('/showStg') ;
    }

    public function detail($id){
    $stg = User::where('id',$id)->get();
        return view('pages/detailStg',["data"=>$stg]);
    }

    // public function update($id){
    //     $stg = User::where('id',$id)->get();
    //     return view('pages/updateStg',["data"=>$stg]);
        
    // }
    // public  function saveUpdate(Request $request){
    //     User::where('id',$request->id)->update([
    //         'name'=>$request->name,
    //         'email'=>$request->email
    //     ]);
    //     return redirect ('/showStg');
    // }
    
    public function search(Request $request){
        $stg =User::where('name', '=', $request->name)->paginate(6);
        // if (empty($stg)){
        //    echo '<p>Aucun stagiaire trouvé.</p>'; 
        // } 
        // else{
            return view('pages/showStg', ['stagiaires' => $stg]);
        // }
        
    }
    public function searchPre(Request $request){
        $stg =User::where('name', '=', $request->name)->paginate(6);
        // if (empty($stg)){
        //    echo '<p>Aucun stagiaire trouvé.</p>'; 
        // } 
        // else{
            return view('pages/listPres', ['stagiaires' => $stg]);
        // }
        
    }
    public function searchAbs(Request $request){
        $stg =User::where('name', '=', $request->name)->paginate(6);
        // if (empty($stg)){
        //    echo '<p>Aucun stagiaire trouvé.</p>'; 
        // } 
        // else{
            return view('pages/suiviDemandeAbs', ['stagiaires' => $stg]);
        // }
        
    }




    // public function statusDemande()
    // {
    //     // Récupérer l'ID et le nom de l'utilisateur connecté
    //     $userId = Auth::id();
    //     $username = Auth::user()->name;

    //     // Récupérer le statut de la demande de stage de l'utilisateur connecté
    //     $demande = Demande_stage::where('idStg', $userId)
    //                             ->where('name', $username)
    //                             ->first();

    //     // Passer le statut à la vue
    //     return view('pages/espace_stagiaire', ['demande' => $demande]);
    //     // echo $demande;
    // }
//     public function statusDemande()
// {
//     // Récupérer l'ID et le nom de l'utilisateur connecté
//     $userId = Auth::id();
//     $username = Auth::user()->name;

//     // Récupérer le statut de la demande de stage de l'utilisateur connecté
//     $demande = Demande_stage::where('idStg', $userId)
//                             ->where('name', $username)
//                             ->first();

//     // Passer le statut à la vue
//     return view('pages/espace_stagiaire', ['demande' => $demande]);
// }

public function statusDemande()
{
    // Récupérer l'ID et le nom de l'utilisateur connecté
    $userId = Auth::id();
    $username = Auth::user()->name;

    // Récupérer le statut de la demande de stage de l'utilisateur connecté
    $demande = Demande_stage::where('idStg', $userId)
                            ->where('name', $username)
                            ->first();

    // Passer le statut à la vue
    return view('pages/espace_stagiaire', ['demande' => $demande]);
}

    // public function statusDemande()//showDashboard
    // {
    //     // Récupérer l'ID de l'utilisateur connecté
    //     $userId = Auth::id();
    //     $username = Auth::user();
    //     // Récupérer le statut de la demande de stage de l'utilisateur connecté
    //     $demande = Demande_stage::where('idStg', $userId and 'name',$username->name )->first();

    //     // Passer le statut à la vue
    //     // return view('pages/espace_stagiaire', ['demande' => $demande]);
    //     echo $demande;
    // }

    public function statusAbs()
    {
        // Récupérer l'ID de l'utilisateur connecté
        $userId = Auth::id();
        
        // Récupérer le statut de la demande de stage de l'utilisateur connecté
        $demande = Absence::where('id', $userId)->first();

        // Passer le statut à la vue
        return view('pages/suiviDemandeAbs', ['demande' => $demande]);
    }
}
