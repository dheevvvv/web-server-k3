<?php

namespace App\Http\Controllers;

use App\Accident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class AccidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $batas = 5;
        // $jumlah_accident = Accident::count();
        // $data_accident = Accident::all();
        // $no = $batas * ($data_accident->currentPage() -1);

        
        // $countdata = Accident::count();
        
        $data_accident = Http::get('https://stoplight.io/mocks/lazaaq/sik3rs/21866705/api/accident')['accidents'];
        
        $jumlah_accident = count($data_accident);
        // // $result = json_decode($response->getBody()->getContents(), true);
        // $data_accident = $response['accidents']['time'];
        // // return view('accident.index', compact('data_accident'));
        
        // return $data_accident;

        // return view('accident.index', compact('data_accident'));

        // $curl = curl_init();
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        // $result = curl_exec($curl);
        // curl_close($curl);

        // $result = json_decode($result, true);
        // $data_accident = $result['time'];
        return view('accident.index', compact('data_accident', 'jumlah_accident'));
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
     * @param  \App\Accident  $accident
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accident  $accident
     * @return \Illuminate\Http\Response
     */
    public function edit(Accident $accident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accident  $accident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accident $accident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accident  $accident
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accident $accident)
    {
        //
    }

   
    

        
    
}
