<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spents;

class SpentController extends Controller
{
    public function store(Request $request)
    {
        $spent = new Spents;
        $spent->value = $request->value_spent;
        $spent->id_categoria = $request->id_category_spent;
        $spent->save();
        return redirect('/#saidas');
    }  

    public function update(Request $request)
    {
        $spent = new Spents();
        $spent = $spent->find($request->id_spent);
        $spent->value = $request->value_spent;
        $spent->id_categoria = $request->id_category_spent;
        $spent->save();       
        return redirect('/#saidas');
    }

    public function delete(Request $request)
    {
        $spent = new Spents();
        $spent = $spent->find($request->id_spent);
        $spent->delete();       
        return redirect('/#saidas');
    }
}
