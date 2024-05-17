<?php

namespace App\Http\Controllers;
use App\Models\Demande_stage;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class demandeController extends Controller
{
    //
    public function getData(){
        $data=Demande_stage::paginate(6);
        return view('pages/showStg', ["stagiaires"=>$data]);
        // return view('pages/detailStg', ["stagiaires"=>$data]);
    }
    // public function getstg(){
    //     $data=Demande_stage::all();
    //     return view('pages/espace_stagiaire', ["stagiaires"=>$data]);
    //     // return view('pages/detailStg', ["stagiaires"=>$data]);
    // }

    
    public function insertData(Request $request){
        
    $userId = Auth::id();
    if ($userId){
        $Stagiaire = new Demande_stage();
        $Stagiaire->name = $request->name;
        $Stagiaire->phone = $request->phone;
        $Stagiaire->adress = $request->adress;
        $Stagiaire->dateNias = $request->dateNias;
        $Stagiaire->etablissement = $request->etablissement;
        $Stagiaire->dateD = $request->dateD;
        $Stagiaire->dateF = $request->dateF;

        $Stagiaire->idStg = $userId;        
        $Stagiaire->save(); 
        return redirect('/demandeReussite'); 

        
        
    }else{
        echo 'non trouver';
        // return redirect()->route('error')->with('message', 'Utilisateur non trouvé.');
    }
    
    
    }
    public function detail($id){
        $stg = Demande_stage::where('iddemande',$id)->get();
            return view('pages/detailStg',["data"=>$stg]);
        }

    public function accepter($id){
        $data=Demande_stage::where('iddemande',$id )->update(['status' => 'accepter' ]);
        return redirect('/detail/{id}');
        // return view('pages/espace_stagiaire', ["stagiaires"=>$data]);
    }
    public function refuser($id){
        Demande_stage::where('iddemande',$id )->update(['status' => 'refuser' ]);
        return redirect('/showStg');
    }
  




    public function update($iddemande){
        $stg = Demande_stage::where('iddemande',$iddemande)->get();
        return view('pages/updateStg',["data"=>$stg]);
        
    }
    public  function saveUpdate(Request $request){
        Demande_stage::where('iddemande',$request->id)->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'dateNias'=>$request->dateNias,
            'adress'=>$request->adress,
            'status'=>$request->status,
        ]);
        return redirect ('/showStg');
    }

    public function delete($id){
        Demande_stage::where('iddemande',$id)->delete();
        return redirect ('/showStg');

    }

    

    public function getStatus(){
        $userId = Auth::id();

        $username = Auth::user();
        $data=Demande_stage::where('iddemande',$userId and'name',$username->name)->get();
        // $data=Demande_stage::all();

        return view('pages/suiviDemande',["data"=>$data]);

        // echo $data->status;
        // echo dd($data);
        // $data=Demande_stage::select('iddemande as id')->get();
        // echo $data;

    }



    }
