<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\FilmResource;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();
        return response([ 'films' => FilmResource::collection($films), 'message' => 'Retrieved successfully'], 200);
    }

     /**
     * Display a listing of the resource by name.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getSearchResults(Request $request)
    {
        $data = $request->get('data');
        $films = Film::where('namefilm', 'like', "%{$data}%")
                 ->get();
        return response([ 'films' => FilmResource::collection($films), 'message' => 'Retrieved successfully'], 200);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'namefilm' => 'required|max:255',
            'desfilm' => 'required|max:255',
            'fecEst' => 'required|date',
            'maiuse' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $film = Film::create($data);

        return response(['film' => new FilmResource($film), 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return response(['film' => new FilmResource($film), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
        $film->update($request->all());

        return response(['film' => new FilmResource($film), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $film->delete();

        return response(['message' => 'Deleted']);
    }
}
