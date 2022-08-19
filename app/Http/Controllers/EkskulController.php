<?php

namespace App\Http\Controllers;
use App\Models\Ekskul;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    public function index(){
        $ekskul = Ekskul::all();
        return view('ekskul.index',compact(['ekskul']));
    }
    public function create(){
        return view('ekskul.create');
    }
    public function store(Request $request){
        Ekskul::create($request->except(['_token','submit']));
        return redirect('/ekskul');

    }
}
