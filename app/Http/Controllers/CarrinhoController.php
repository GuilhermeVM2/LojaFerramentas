<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Facades\Auth;

class CarrinhoController extends Controller
{
    //
    public function add(Request $request,Produto $produto){
        $dados = $request->validate([
            'quantidade'=>'required|numeric|min:1'
        ]);
        
        Carrinho::create(['id_produto'=>$produto->id,
                         'id_user'=>Auth::id(),
                         'quantidade'=>$request->quantidade]);
        return redirect()->route('produtos.show',$produto)
        ->with('sucess','Produto adicionado ao Carrinho.')  ;
    }


}
