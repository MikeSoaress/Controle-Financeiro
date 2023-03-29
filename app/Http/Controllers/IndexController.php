<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\vwInputs;
use App\Models\vwspents;

class IndexController extends Controller
{
    public function index()
    {
        $categorias = Categories::all();
        $inputs = vwInputs::all();


        $inputs_mensais = vwInputs::whereMonth('created_at', date('m'))->whereYear('created_at',date('Y'))->sum('value');           
        $spents_mensais = vwspents::whereMonth('created_at', date('m'))->whereYear('created_at',date('Y'))->sum('value');           
        $saldo_mensal =   $inputs_mensais - $spents_mensais;   
        $spents = vwspents::all();

        
            return view('index',
        [
            'inputs' => $inputs,
            'inputs_mensais' => $inputs_mensais,
            'categorias' => $categorias,
            'spents' => $spents,
            'spents_mensais' => $spents_mensais,
            'saldo_mensal' => $saldo_mensal
        ]);
    }  
} 
