<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Disciplina $disciplina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disciplina $disciplina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disciplina $disciplina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disciplina $disciplina)
    {
        //
    }
    class DiscplinaController extends Controller
{
    public function index()
    {
        $Discplinaes = Discplina::all();
        return view('Discplinaes.index', compact('Discplinaes'));
    }

    public function create()
    {
        return view('Discplinaes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'especialidade' => 'required',
        ]);

        Discplina::create($request->all());
        return redirect()->route('Discplinaes.index');
    }

    public function show(Discplina $Discplina)
    {
        return view('Discplinaes.show', compact('Discplina'));
    }

    public function edit(Discplina $Discplina)
    {
        return view('Discplinaes.edit', compact('Discplina'));
    }

    public function update(Request $request, Discplina $Discplina)
    {
        $request->validate([
            'nome' => 'required',
            'especialidade' => 'required',
        ]);

        $Discplina->update($request->all());
        return redirect()->route('Discplinaes.index');
    }

    public function destroy(Discplina $Discplina)
    {
        $Discplina->delete();
        return redirect()->route('Discplinaes.index');
    }
}

}
