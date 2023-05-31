<?php

namespace App\Http\Controllers;
use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('site.projeto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //salvando dados do formulário no banco de dados
        $projeto = new Projeto();

        //..pega os dados vindos do form e seta no model
        $projeto->titulo = $request->input('titulo');
        $projeto->duracao = $request->input('duracao');
        $projeto->descricao = $request->input('descricao');
        $projeto->numIntegrantes = $request->input('numIntegrantes');
        $projeto->andamento = $request->input('andamento');

        //..persiste o model na base de dados
        $projeto->save();

        //retorna a view dashboard
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
