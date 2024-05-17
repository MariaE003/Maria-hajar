<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    //
    public function getData(){
        $data=Contact::paginate(6);
        // $data = Contact::all();
        return view('pages.contactMsg',['data'=>$data]);
    }
    
    public function insertData(Request $request){
        
        $stgId = Auth::id();
        if ($stgId){
            $Stagiaire = new Contact();
            $Stagiaire->name = $request->name;
            $Stagiaire->email = $request->email;
            $Stagiaire->message = $request->message;

                
            $Stagiaire->idUser = $stgId;        
            $Stagiaire->save(); 
            
            return redirect('/doneContact');
               
            
        }else{
            echo 'non trouver';
            // return redirect()->route('error')->with('message', 'Utilisateur non trouvé.');
        }
        
        
        }
}
