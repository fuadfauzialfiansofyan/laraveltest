<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CastController extends Controller
{
    

    public function create(){
        return view('halaman.crud.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:cast',
            'umur' => 'required',
            'bio'  => 'required'
        ]);

        $query = DB::table('cast')->insert([
            "nama" => $request["nama"],
            "umur" => $request["umur"],
            "bio" => $request["bio"]
        ]);
        return redirect('/cast');
    }
    
    public function index(){
        $listcast = DB::table('cast')->get();
        return view('halaman.crud.index', compact('listcast'));
    }

    public function show($id){
        $cast = DB::table('cast')->where('id', $id)->first();
        return view('halaman.crud.show', compact('cast'));
    }

    public function edit($id){
        $cast = DB::table('cast')->where('id', $id)->first();
        return view('halaman.crud.edit', compact('cast'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:cast',
            'umur' => 'required',
            'bio'  => 'required'
        ]);

        $query = DB::table('cast')
        ->where('id', $id)
        ->update([
            'nama' => $request["nama"],
            'umur' => $request["umur"],
            'bio'  => $request["bio"]
        ]);
        return redirect('/cast');
    }

    public function hapus($id){
        $query = DB::table('cast')->where('id', $id)->delete();
        return redirect('/cast');
    }
}