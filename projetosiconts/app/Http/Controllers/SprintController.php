<?php

namespace App\Http\Controllers;
use App\Models\Sprint;
use Illuminate\Http\Request;

class SprintController extends Controller
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
        return view('site.sprint');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //salvando dados do formulário no banco de dados
        $sprint = new Sprint();

        //..pega os dados vindos do form e seta no model
        $sprint->nome = $request->input('nome');
        $sprint->duracao = $request->input('duracao');
        $sprint->num_itens = $request->input('num_itens');
        $sprint->status = $request->input('status');

        //..persiste o model na base de dados
        $sprint->save();

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
