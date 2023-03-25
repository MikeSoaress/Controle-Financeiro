<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class IndexController extends Controller
{
    public function index()
    {
        $categorias = Categories::all();
        return view('index',
        [
            'categorias' => $categorias
        ]);
    }  
} 
