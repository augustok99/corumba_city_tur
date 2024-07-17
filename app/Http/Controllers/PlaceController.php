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

    public function create()
    {
        return view('places.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:Hotel,Restaurante,Monumento',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
        ]);

        return redirect()->route('places.index')->with('success', 'Lugar cadastrado com sucesso!');
    }
    public function showDetails()
    {
        // Consulta utilizando join para obter o nome de usuário e a foto de perfil
        $places = DB::table('places')
            ->join('users', 'places.user_id', '=', 'users.id')
            ->select('places.*', 'users.username as username', 'users.profile_image as profile_image')
            ->get();

        return view('layouts.detalhes', compact('places'));
    }


}