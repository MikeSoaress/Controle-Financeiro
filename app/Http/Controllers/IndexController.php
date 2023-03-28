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
        $spents = vwspents::all();
        return view('index',
        [
            'inputs' => $inputs,
            'categorias' => $categorias,
            'spents' => $spents
        ]);
    }  
} 
