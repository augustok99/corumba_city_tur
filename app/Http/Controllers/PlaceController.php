<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::where('user_id', Auth::id())->get();
        return view('layouts.lugares_cadastrados', [
            'places' => $places ?? null
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:21',
            'type' => 'required|in:Hotel,Restaurante,Monumento',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string|max:255',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('places_path'), $imageName);
        }

        Place::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'type' => $request->type,
            'image_path' => $imageName,
            'description' => $request->description,
        ]);

        return redirect()->route('places.index')->with('success', 'Lugar cadastrado com sucesso!');
    }

    public function show($id)
    {
        $minId = Place::min('id');
        $maxId = Place::max('id');

        // Busca o lugar pelo ID
        $place = Place::findOrFail($id);

        // Retorna a visão com os detalhes do lugar
        return view('layouts.place_details', compact('place', 'minId', 'maxId'));
    }
    public function showDetails()
    {
        // Consulta utilizando join para obter o nome de usuário e a foto de perfil
        $places = DB::table('places')
            ->join('users', 'places.user_id', '=', 'users.id')
            ->select('places.*', 'users.username as username', 'users.profile_image as profile_image')
            ->get();

        return view('layouts.detalhes', compact('places')); //passa a places para a view
    }

    public function edit($id)
    {
        $place = Place::findOrFail($id);
        $places = Place::all();
        return view('layouts.edit_place', compact('place', 'places'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:21',
            'type' => 'required|in:Hotel,Restaurante,Monumento',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string|max:255',
        ]);

        $place = Place::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('places_path'), $imageName);
            $place->image_path = $imageName;
        }

        $place->update([
            'title' => $request->title,
            'type' => $request->type,
            'description' => $request->description, // Atualiza a descrição
        ]);

        return redirect()->route('places.index')->with('success', 'Lugar atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $place = Place::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        // Remover a imagem associada (opcional)
        if ($place->image_path) {
            $imagePath = public_path('places_path/' . $place->image_path);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $place->delete();

        return redirect()->route('places.index')->with('success', 'Lugar deletado com sucesso!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $places = DB::table('places')
            ->join('users', 'places.user_id', '=', 'users.id')
            ->select('places.*', 'users.username', 'users.profile_image')
            ->where('places.title', 'LIKE', "%{$query}%")
            ->orWhere('places.type', 'LIKE', "%{$query}%")
            ->get();

        return view('layouts.detalhes', compact('places'));
    }


}