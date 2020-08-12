<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get();
        // dd($pertanyaan);
        return view('crud.pertanyaan', compact('pertanyaan'));
    }
    public function create(){
        return view('crud.create');
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]]
        );

        return redirect('/pertanyaan')->with('success', 'pertanyaan berhasil dikirim!');
    }
    public function show($pertanyaan_id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();
        // dd($pertanyaan);
        return view('crud.show', compact('pertanyaan'));
    }
    public function edit($pertanyaan_id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();

        return view('crud.edit', compact('pertanyaan'));
    }
    public function update($pertanyaan_id, Request $request){
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);

        $query = DB::table('pertanyaan')
                    ->where('id', $pertanyaan_id)
                    ->update([
                        'judul' => $request['judul'],
                        'isi' => $request['isi']
                    ]);
        return redirect('/pertanyaan')->with('success', 'Berhasil Update Pertanyaan!');
    }
    public function destroy($pertanyaan_id){
        $query = DB::table('pertanyaan')->where('id', $pertanyaan_id)->delete();
        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil dihapus!');
    }
}
