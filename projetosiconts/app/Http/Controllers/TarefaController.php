<?php

namespace App\Http\Controllers;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
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
        return view('site.tarefa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //salvando dados do formulário no banco de dados
        $tarefa = new Tarefa();

        //..pega os dados vindos do form e seta no model
        $tarefa->descricao = $request->input('descricao');
        $tarefa->status = $request->input('status');
        $tarefa->data_inicio = $request->input('data_inicio');
        $tarefa->data_termino = $request->input('data_termino');
        $tarefa->comentario = $request->input('comentario');

        //..persiste o model na base de dados
        $tarefa->save();

        //retornar a view dashboard
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
