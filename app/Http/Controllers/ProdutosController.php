<?php
namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use App\Http\Requests\CadastroProdutoRequest;
use App\Http\Requests\EdicaoProdutoRequest;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return response()->json(['data' => $produtos]);
    }

    public function create(CadastroProdutoRequest $request)
    {
        Produto::create($request->validated());
        return response()->json(['message' => 'Produto criado com sucesso']);
    }

    public function show(Produto $produto)
    {
        return response()->json(['data' => $produto]);
    }

    public function update(EdicaoProdutoRequest $request, Produto $produto)
    {
        dd($request, $produto);
        $produto->update($request->validated());
        return response()->json(['message' => 'Produto atualizado com sucesso']);
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return response()->json(['message' => 'Produto deletado com sucesso']);
    }
}
