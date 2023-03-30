<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $categoria = new Categories;
        $categoria->legend = $request->legend_category;
        $categoria->type = $request->type_category;
        $categoria->save();
        return redirect('/#categorias');
    }  

    public function update(Request $request)
    {
        $categoria = new Categories();
        $categoria = $categoria->find($request->id_category);
        $categoria->legend = $request->legend_category;
        $categoria->save();       
        return redirect('/#categorias');
    }
}
