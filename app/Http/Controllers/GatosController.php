<?php

namespace App\Http\Controllers;

use App\Models\Gato;
use Illuminate\Http\Request;

class GatosController extends Controller
{
    /**
     * Lista todos os gatos cadastrados
     */
    public function index()
    {
        // Pega todos os registos da tabela relacionada ao modelo Gato
        $gatos = Gato::all();

        return view('gatos.index', compact('gatos'));
    }

    /**
     * Mostra o formulário para criar um novo gato
     */
    public function create()
    {
        return view('gatos.create');
    }

    /**
     * Armazena um novo gato
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Mostra um gato específico
     */
    public function show($id)
    {
        //
    }

    /**
     * Mostra o formulário para editar um gato específico
     */
    public function edit($id)
    {
        //
    }

    /**
     * Atualiza um gato específico
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove um gato específico
     */
    public function destroy($id)
    {

    }
}
