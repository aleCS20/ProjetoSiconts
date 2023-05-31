<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
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
        return view('site.item');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //salvando dados do formulário no banco de dados
        $item = new Item();

        //..pega os dados vindos do form e seta no model
        $item->titulo = $request->input('titulo');
        $item->descricao = $request->input('descricao');

        //..persiste o model na base de dados
        $item->save();

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
