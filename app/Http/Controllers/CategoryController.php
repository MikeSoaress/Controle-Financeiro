<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $categoria = new Categories;
        $categoria->legend = $request->legend;
        $categoria->type = $request->type;
        $categoria->save();
        return redirect('/#categorias');
    }  
}
