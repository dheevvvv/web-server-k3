<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class DashboardController extends Controller
{
    public function index(){
        $data_diseases = Http::get('https://stoplight.io/mocks/lazaaq/sik3rs/21866705/api/disease')['diseases'];
        $jumlah_diseases = count($data_diseases);
        $data_b3 = Http::get('https://stoplight.io/mocks/lazaaq/sik3rs/21866705/api/b3s')['b3s'];
        $jumlah_b3 = count($data_b3);
        $data_accident = Http::get('https://stoplight.io/mocks/lazaaq/sik3rs/21866705/api/accident')['accidents'];
        
        $jumlah_accident = count($data_accident);

        return view('dashboard.index', compact('data_diseases', 'jumlah_diseases', 'data_b3', 'jumlah_b3', 'data_accident', 'jumlah_accident'));
    }
}
