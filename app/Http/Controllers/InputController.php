<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inputs;

class InputController extends Controller
{
    public function store(Request $request)
    {
        $input = new Inputs;
        $input->value = $request->value_entrada;
        $input->id_categoria = $request->id_input_entrada;
        $input->save();
        return redirect('/#entradas');
    }  

    public function update(Request $request)
    {
        $input = new Inputs();
        $input = $input->find($request->id_entrada_update);
        $input->value = $request->value_entrada_update;
        $input->id_categoria = $request->id_categoria_input_update;
        echo($input->id_categoria = $request->id_categoria_input_update);
        $input->save();       
        return redirect('/#entradas');
    }

    public function delete(Request $request)
    {
        $input = new Inputs();
        $input = $input->find($request->id_entrada_delete);
        $input->delete();       
        return redirect('/#entradas');
    }
}
