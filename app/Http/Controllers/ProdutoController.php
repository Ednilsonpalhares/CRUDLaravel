<?php

namespace Estoque\Http\Controllers;

use Estoque\Http\Requests\ProdutosRequest;
use Estoque\Produto;
use Illuminate\Http\Request;

//use Request;

class ProdutoController extends Controller
{
    public function lista(){
        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos',$produtos);
    }
    public function mostra($id){
        $produto = Produto::find($id);
        if(empty($produto)){
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p',$produto);
    }
    public function novo(){
        return view('produto.formulario');
    }
    public function adiciona(ProdutosRequest $request){
        Produto::create($request->all());
        return redirect()->action('ProdutoController@lista');
    }
    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }
    public function edit($id){
        $produto = Produto::findOrFail($id);
        return view('produto.formulario',['produto'=> $produto]);
    }
    public function update($id, Request $request){
        $produto = Produto::findOrFail($id);
        $produto->update($request->all());
        return redirect()->action('ProdutoController@lista');
    }
}
