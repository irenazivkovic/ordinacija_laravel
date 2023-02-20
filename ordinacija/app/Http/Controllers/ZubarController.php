<?php

namespace App\Http\Controllers;

use App\Models\Zubar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ZubarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $zubari = Zubar::all();

        return response()->json([
            'STATUS' => 200,
            'ZUBARI' => $zubari
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string',
            'prezime' => 'required|string',
            'kategorija' => 'required|string'
        ]);

        if($validator->fails()){
            return response()->json([
                'STATUS' => 404,
                'ERROR' => $validator->errors()
            ]);
        }

        $new_zubar = Zubar::create([
            'ime' => $request->ime, 
            'prezime' => $request->prezime,
            'kategorija' => $request->kategorija
        ]);

        return response()->json([
            'STATUS' => 200,
            'MESSAGE' => 'Novi zubar je unet u bazu',
            'ZUBAR' => $new_zubar
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zubar  $zubar
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Zubar $zubar)
    {
        $zubar_show = Zubar::find($zubar)->first();

        return response()->json([
            'STATUS' => 200,
            'ZUBAR' => $zubar_show
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zubar  $zubar
     * @return \Illuminate\Http\Response
     */
    public function edit(Zubar $zubar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zubar  $zubar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zubar $zubar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zubar  $zubar
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Zubar $zubar)
    {
        Zubar::find($zubar)->first()->delete();

        return response()->json([
            'STATUS' => 200,
            'MESSAGE' => 'Zubar je obrisan.',
        ]);
    }
}
