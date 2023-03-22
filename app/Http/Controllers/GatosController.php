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

        // Manda os dados para uma view, no caso gatos.index
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
    public function store(Request $requisicao)
    {
        // Cria um novo objeto do tipo Gato em branco
        $gato = new Gato();

        // Preenche os campos do objeto com os dados da requisição
        $gato->nome = $requisicao->nome;
        $gato->raca = $requisicao->raca;
        $gato->idade = $requisicao->idade;
        $gato->sexo = $requisicao->sexo;
        $gato->cor = $requisicao->cor;
        $gato->gatografia = $requisicao->gatografia;

        // Salva o objeto no banco de dados
        $gato->save();

        // Redireciona para a página de detalhes do gato
        return redirect()->route('gatos.show', $gato->id);
    }

    /**
     * Mostra um gato específico
     */
    public function show($id)
    {
        return 'Oi, eu sou o gato de id ' . $id . '!';
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
