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
     *
     * O parametro $gato é um objeto do tipo Gato que é passado automaticamente
     * pelo Laravel, pois o nome do parametro é o mesmo nome do parametro que
     * está na rota. O Laravel faz a busca no banco de dados e retorna o objeto
     * que corresponde ao id passado na rota.
     */
    public function show(Gato $gato)
    {
        // Retorna a view gatos.view com o objeto $gato
        return view('gatos.view', compact('gato'));
    }

    /**
     * Mostra o formulário para editar um gato específico
     */
    public function edit(Gato $gato)
    {
        // Retorna a view gatos.edit com o objeto $gato
        return view('gatos.edit', compact('gato'));
    }

    /**
     * Atualiza um gato específico
     */
    public function update(Request $requisicao, Gato $gato)
    {
        // Atualiza o objeto com os dados da requisição
        $gato->update($requisicao->all());

        // Redireciona para a página de detalhes do gato
        return redirect()->route('gatos.show', $gato->id);
    }

    /**
     * Remove um gato específico
     */
    public function destroy($id)
    {

    }
}
