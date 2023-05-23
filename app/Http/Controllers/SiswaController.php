<?php

namespace App\Http\Controllers;

use app\Http\Libraries\BaseApi;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $data = (new BaseApi)->index('Api/siswa');
        $siswas = $data->json();

        return view('index')->with('siswas' , $siswas['data']);
    }
}
