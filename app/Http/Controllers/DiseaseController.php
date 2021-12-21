<?php

namespace App\Http\Controllers;

use App\Disease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $response = Http::get('https://stoplight.io/mocks/lazaaq/sik3rs/21866705/api/disease');
        // $result = json_decode($response->getBody()->getContents(), true);
        $data_diseases = Http::get('https://stoplight.io/mocks/lazaaq/sik3rs/21866705/api/disease')['diseases'];
        $jumlah_diseases = count($data_diseases);

        return view('diseases.index', compact('data_diseases', 'jumlah_diseases'));
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function show(Disease $disease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function edit(Disease $disease)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disease $disease)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disease $disease)
    {
        //
    }
}
