<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\poligigi;


class poligigiController extends Controller
{
     public function index()
    {
    	$data = poligigi::all();
    	return view('poligigi.daftar_poligigi')->with('data', $data);
    }

    public function create ()
    {
    	return view('poligigi.buat_poligigi');
    }
    public function store(Request $request){
    	poligigi::create($request->all());
    return redirect('poligigi');
    }
    public function show($id){
    	$data = poligigi::find($id);
    	return view ('poligigi.detail_poligigi')->with('data', $data);
    }
    public function edit($id){
    	$data = poligigi::find($id);
    	return view ('poligigi.edit_poligigi')->with('data', $data);
    }
    public function update(Request $request, $id){
    	poligigi::find($id)->update($request->all());
    	return redirect('poligigi');
    }

    public function destroy($id){
    	poligigi::find($id)->delete();
    	 return redirect('poligigi');
    }
}
