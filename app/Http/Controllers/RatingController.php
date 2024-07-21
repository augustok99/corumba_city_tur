<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use App\Notifications\RatingLiked;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        Rating::create([
            'user_id' => auth()->id(),
            'content' => $request->content,
            'liked' => false,
        ]);

        return back();
    }

    public function toggleLike($id)
    {
        // Encontra o rating pelo ID ou retorna um erro 404 se não encontrado
        $rating = Rating::findOrFail($id);

        // Alterna o estado de "liked"
        $rating->liked = !$rating->liked;
        $rating->save();

        // Notifica o usuário apenas se o rating foi "liked"
        if ($rating->liked) {
            $rating->user->notify(new RatingLiked($rating));
        }
        // Retorna o estado atualizado de "liked"
        return response()->json([
            'liked' => $rating->liked
        ]);

    }


    public function show(Request $request)
    {
        $ratings = DB::table('ratings')
            ->join('users', 'ratings.user_id', '=', 'users.id')
            ->select('ratings.*', 'users.username as username', 'users.profile_image as profile_image')
            ->get();

        return view('layouts.avaliacao', compact('ratings'));
    }
}