<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Dompdf\Dompdf;
use Dompdf\Options;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        
        return view('Games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    $request->validate([
        'registroAbkc' => 'required|string|max:80',
        'nombrePerro' => 'required|string|max:80',
        'fnac' => 'required|date',
        'sexo' => 'required|string|max:80',
        'nomDueno' => 'required|string|max:80',
        'direccion' => 'required|string|max:150',
        'ciudad' => 'required|string|max:80',
        'estado' => 'required|string|max:80',
        'correo' => 'required|email|max:100',
        'telefono' => 'required|string|max:20',
        'otraRaza' => 'required|string|max:80',
        'estandar' => 'required|string|max:80',
        'sg' => 'required|string|max:80',
        'bolsillo' => 'required|string|max:80',
        'clasico' => 'required|string|max:80',
        'muestraraza' => 'required|string|max:80',
    ]);

        $game = Game::create($request->all());

        if($request->hasFile('image')){
            $nombre = $game->id.'.'.$request->file('image')->getClientOriginalExtension();
            $img = $request->file('image')->storeAs('public/img',$nombre);
            $game->image = '/img/'.$nombre;
            $game->save();
        } else {
            // Optionally, set a default image path if not provided
            $game->image = 'img/default.jpg';
            $game->save();
        }
        return redirect()->route('principal')->with('success','Registro Creado');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $game = Game::findOrFail($id);
        return view('Games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        
        return view('Games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $request->validate([
            'registroAbkc' => 'required|string|max:80',
            'nombrePerro' => 'required|string|max:80',
            'fnac' => 'required|date',
            'sexo' => 'required|string|max:10',
            'nomDueno' => 'required|string|max:80',
            'direccion' => 'required|string|max:150',
            'ciudad' => 'required|string|max:80',
            'estado' => 'required|string|max:80',
            'correo' => 'required|email|max:100',
            'telefono' => 'required|string|max:20',
            'otraRaza' => 'required|string|max:80',
            'estandar' => 'required|string|max:80',
            'sg' => 'required|string|max:80',
            'bolsillo' => 'required|string|max:80',
            'clasico' => 'required|string|max:80',
            'muestraraza' => 'required|string|max:80',
        ]);
    

        
        if($request->hasFile('image')){
            Storage::disk('public')->delete($game->image);
            $nombre = $game->id.'.'.$request->file('image')->getClientOriginalExtension();
            $img = $request->file('image')->storeAs('public/img',$nombre);
            $game->image = '/img/'.$nombre;
            $game->save();
        }

        $game->update($request->input());
        return redirect()->route('home')->with('success','Registro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        Storage::disk('public')->delete($game->image);
        $game->delete();
        return redirect()->route('home')->with('success','Registro eliminado');
    }

    public function exportPdf($id)
{
    $game = Game::find($id);

    // Si el juego no existe, puedes manejar esto como desees (por ejemplo, redirigir o mostrar un error).
    if (!$game) {
        abort(404);
    }

        // Cargar la vista y convertirla a HTML
        $html = view('games.export-pdf', compact('game'))->render();

    // Opciones para Dompdf
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isPhpEnabled', true);
    $options->set('defaultFont', 'Arial');

    // Crear una instancia de Dompdf
    $dompdf = new Dompdf($options);

   // Renderizar el HTML como PDF
    $dompdf->loadHtml($html);
    // Renderizar el HTML como PDF
        // (Opcional) Tamaño máximo del papel y orientación
        $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    // Descargar el PDF
    return $dompdf->stream('detalle_registro.pdf');
}

}
