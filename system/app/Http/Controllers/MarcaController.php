<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{

    public function showAllMarcas()
    {
        return view('veiculo/marcasVeiculos');
    }

    public function storeMarca(Request $request)
    {

        $marca = new Marca();
        $marca->nome = $request->nomeMarcaInput;

        if ($marca->save()) {
            return redirect()->route('marcas.show', ['tenant' => $_COOKIE['tenant_name']])->with('success', 'Marca cadastrada com sucesso');
        } else {
            return redirect()->route('marcas.show', ['tenant' => $_COOKIE['tenant_name']])->withErrors('error', 'Não foi possível cadastrar a marca, tente novamente.');
        }
    }

    public function getAllMarcas()
    {
        echo json_encode(Marca::all());
    }
}
