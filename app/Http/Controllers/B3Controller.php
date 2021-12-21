<?php

namespace App\Http\Controllers;

use App\B3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class B3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_b3 = Http::get('https://stoplight.io/mocks/lazaaq/sik3rs/21866705/api/b3s')['b3s'];
        $jumlah_b3 = count($data_b3);

        return view('b3.index', compact('data_b3', 'jumlah_b3'));
        
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
     * @param  \App\B3  $b3
     * @return \Illuminate\Http\Response
     */
    public function show(B3 $b3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\B3  $b3
     * @return \Illuminate\Http\Response
     */
    public function edit(B3 $b3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\B3  $b3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, B3 $b3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\B3  $b3
     * @return \Illuminate\Http\Response
     */
    public function destroy(B3 $b3)
    {
        //
    }
}
