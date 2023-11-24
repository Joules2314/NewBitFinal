<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Anime;

class CadastroAController extends Controller
{
    
    public function index(){
        
       $animes = Anime::all();
        
        return view('home',['animes' => $animes]);
    }
    
    
    public function create() {
        return view('Cadastro Anime.create');
    }

    public function store(Request $request){
        $anime = new Anime;

        $anime->nome_anime = $request->nome_anime;
        $anime->nome_autor = $request->nome_autor;
        $anime->nome_estudio = $request->nome_estudio;
        $anime->gen_anime = $request->gen_anime;
        $anime->data_lançamento = $request->data_lançamento;
        $anime->data_termino = $request->data_termino;
        $anime->num_episodios = $request->num_episodios;
        $anime->sinopse = $request->sinopse;

        $anime->save();

        return redirect('/');

    }


    public function show($id){
        $anime = Anime::findOrFail($id);

        return view('Cadastro Anime.show', ['anime' =>$anime]);
    }


    public function destroy($id){
        Anime::findOrFail($id)->delete();

        return redirect('/');


    }

    public function edit($id){
        $anime = Anime::findOrFail($id);

        return view('Cadastro Anime.edit', ['anime'=>$anime]);
    }

    public function update(Request $request){

        unset($request['submit']);

        Anime::findOrfail($request->id)->update($request->all());

        return redirect('/');

    }


}
