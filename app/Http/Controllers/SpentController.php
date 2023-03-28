<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spents;

class SpentController extends Controller
{
    public function store(Request $request)
    {
        $spent = new Spents;
        $spent->value = $request->value_saida;
        $spent->id_categoria = $request->id_category_spent_saida;
        $spent->save();
        return redirect('/#saidas');
    }  

    public function update(Request $request)
    {
        $spent = new Spents();
        $spent = $spent->find($request->id_spent_update);
        $spent->value = $request->value_spent_update;
        $spent->id_categoria = $request->id_categoria_spent_update;
        echo($spent->id_categoria = $request->id_categoria_spent_update);
        $spent->save();       
        return redirect('/#saidas');
    }

    public function delete(Request $request)
    {
        $spent = new Spents();
        $spent = $spent->find($request->id_spent_delete);
        $spent->delete();       
        return redirect('/#saidas');
    }
}
