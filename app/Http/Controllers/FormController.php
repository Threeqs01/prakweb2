<?php 

namespace App\Htpp\Controllers;

use Illuminate\Htpp\Request;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }

    public function form(Request $request){
        $data = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'lokasi' => $request->input('lokasi'),
            'jk' => $request->input('jk'),
            'skill' => $request->input('skill'),
        ];
        return view('form', compact('data'));
    }
}

?>