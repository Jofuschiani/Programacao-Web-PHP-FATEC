<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagens;

class PersonagensController extends Controller
{
    public function index()
    {
        $personagens = Personagens::all();
        return view('personagens.index', compact ('personagens'));
    }

    public function create()
    {
        return view('personagens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max: 255',
            'classe' => 'required|max: 255',
            'raca' => 'required|max: 255',
            'genero' => 'required|max: 255',
            'arma' => 'required|max: 255',
        ]);

        Personagens::create ($request->all());
        return redirect()->route('personagens.index')
                        ->with('Sucesso!', 'Personagem criado com sucesso!');
    }

    public function show($id)
    {
        $personagens = Personagens::findOrFail($id);
        return view('personagens.show', compact('personagens'));
    }
    public function edit($id)
    {
        $personagens = Personagens::findOrFail($id);
        return view('personagens.edit', compact('personagens'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|max: 255',
            'classe' => 'required|max: 255',
            'raca' => 'required|max: 255',
            'genero' => 'required|max: 255',
            'arma' => 'required|max: 255',
        ]);

        $personagens = Personagens::findOrFail($id);
        $personagens->update($request->all());

        return redirect()->route('personagens.index')
                        ->with('Sucesso!', 'Personagem editado com sucesso!');
    }

    public function delete($id)
    {
        $personagens = Personagens::findOrFail($id);
        return view('personagens.delete', compact('personagens'));
    }

    public function destroy(string $id)
    {
        $personagens = Personagens::findOrFail($id);
        $personagens->delete();
        
        return redirect()->route('personagens.index')
                        ->with('Sucesso!', 'Personagem deletado com sucesso!');
    }
}
