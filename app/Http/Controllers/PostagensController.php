<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;
use Illuminate\Support\Facades\Blade;

class PostagensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    

        return view('site.postagens.index', [
            'postagens' => Postagem::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.postagens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novaPostagem = Postagem::create([
            'titulo'=>$request->titulo,
            'conteudo'=>$request->conteudo 
        ]);
        return redirect(route('postagens.show',['postagen'=>$novaPostagem->getKey()]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conteudo = Postagem::find($id);
        return view('site.postagens.show',['conteudoCarregado'=>$conteudo]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postagen = Postagem::find($id);
        return view('site.postagens.edit',['postagen' => $postagen ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $postagem = Postagem::find($id);
        $postagem->update($request->all());
        return redirect(route('postagens.show',['postagen'=>$id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $postagem = Postagem::find($id);
        $postagem->delete();
        return redirect(route('postagens.index'));
    }

}
