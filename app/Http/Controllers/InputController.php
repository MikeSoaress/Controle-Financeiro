<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inputs;

class InputController extends Controller
{
    public function store(Request $request)
    {
        $input = new Inputs;
        $input->value = $request->value_input;
        $input->id_categoria = $request->id_category_input;
        $input->save();
        return redirect('/#entradas');
    }  

    public function update(Request $request)
    {
        $input = new Inputs();
        $input = $input->find($request->id_input);
        $input->value = $request->value_input;
        $input->id_categoria = $request->id_category_input;
        $input->save();       
        return redirect('/#entradas');
    }

    public function delete(Request $request)
    {
        $input = new Inputs();
        $input = $input->find($request->id_input);
        $input->delete();       
        return redirect('/#entradas');
    }
}
