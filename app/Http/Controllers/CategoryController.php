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

    public function update(Request $request)
    {
        $categoria = new Categories();
        $categoria = $categoria->find($request->id_categoria_update);
        $categoria->legend = $request->legend_categoria_update;
        $categoria->save();       
        return redirect('/#categorias');
    }
}
