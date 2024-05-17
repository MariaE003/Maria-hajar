<?php

namespace App\Http\Controllers;

use App\Models\ChartData;
use App\Models\Demande_stage;
use App\Models\Precense;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartDataController extends Controller
{
    //
    // public function index()
    // {
    //     $chartData = ChartData::all();

    //     return view('pages/chart', compact('chartData'));
    // }

    // public function getData()
    // {
    //     $chartData = ChartData::all();

    //     return response()->json($chartData);
    // }


    // public function index()
    // {
    //     return view('pages.chart');
    // }

    // public function getData()
    // {
    //     $demandesParMois = Demande_stage::selectRaw('MONTH(created_at) as mois, COUNT(*) as total')
    //         ->groupBy('mois')
    //         ->get();

    //     return response()->json($demandesParMois);
    // }

    public function index()
    {
        return view('pages.chart');
    }

    // public function getData()
    // {
    //     $demandesParMois = Demande_stage::selectRaw('MONTH(created_at) as mois, COUNT(*) as total')
    //         ->groupBy('mois')
    //         ->get();

    //     return response()->json($demandesParMois);
    // }



    public function getData()
    {
        // Obtenir le nombre de demandes par mois
        $demandesParMois = Demande_stage::selectRaw('MONTH(created_at) as mois, COUNT(*) as total')
            ->groupByRaw('MONTH(created_at)')
            ->get();

        // Créer un tableau associatif avec tous les mois de l'année et leur total initialisé à zéro
        $demandesParMoisCompletes = [];
        for ($mois = 1; $mois <= 12; $mois++) {
            $demandesParMoisCompletes[$mois] = 0;
        }

        // Mettre à jour les totaux réels avec les données récupérées de la base de données
        foreach ($demandesParMois as $demande) {
            $demandesParMoisCompletes[$demande->mois] = $demande->total;
        }

        // Créer un tableau final avec les mois et les totaux pour l'affichage dans le graphique
        $data = [];
        for ($mois = 1; $mois <= 12; $mois++) {
            $data[] = [
                'mois' => $mois,
                'total' => $demandesParMoisCompletes[$mois],
            ];
        }

        return response()->json($data);
    }




    
        // pas
    // public function demandesParMois()
    // {
    //     $demandesParMois = Demande_stage::select(DB::raw('MONTH(created_at) as mois'), DB::raw('COUNT(*) as total'))
    //         ->groupBy(DB::raw('MONTH(created_at)'))
    //         ->get();
        
    //     return response()->json($demandesParMois);
    // }

    public function getDemandesParMoisJson()
    {
        $demandesParMois = Demande_stage::select(DB::raw('MONTH(created_at) as mois'), DB::raw('COUNT(*) as total'))
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->get();

        return json_encode($demandesParMois);
    }
    

    // video li js
        // public function getData(){
        //     $users=User::selectRaw('MONTH(created_at) as month,COUNT(*) as count')
        //     -> whereYear('created_at',date('y'))
        //     ->groupBy('month')
        //     ->orderBy('month')
        //     ->get();

        //     $labels=[];
        //     $data=[];
        //     $colors=['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6','#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
        //     '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A'];

        //     for ($i=1; $i <12 ; $i++) { 
        //         $month=date('F',mktime(0,0,0,$i,1));
        //         $count=0;
        //         foreach ($users as $user) {
        //             if ($user->month==$i) {
        //                 $count=$user->count;
        //                 break;
        //             }
        //         }
        //         array_push($labels,$month);
        //         array_push($data,$count);
        //     };
        //     $datasets=[
        //         [
        //         'label'=>'Users',
        //         'data'=>$data,
        //         'backgroundColor'=>$colors
        //         ]
        //         ];
        //         return view('pages.chart',compact('datasets','labels'));
        // }


}
