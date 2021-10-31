<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Fornecedore;
use App\Model\Categoria;
use App\Model\Contato;
use Illuminate\Support\Facades\DB;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtitulo = 'Listacidade';
      //  $fornecedores = Fornecedore::with('categoria', 'contato')->get();
        $fornecedores = Fornecedore::all();
          return view('admin.fornecedor.fornecedores', compact('subtitulo', 'fornecedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = route('fornecedor.store');
        $categorias = Categoria::all();
        return view('admin.fornecedor.formfornecedor', compact('action', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        DB::beginTransaction();
        $fornecedor = Fornecedore::create($request->all());
        $fornecedor->contato()->create($request->all());
        DB::Commit();
        $request->session()->flash('sucesso', "Categoria Incluida com sucesso !");
        return redirect()->route('fornecedor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fornecedor =  Fornecedore::find($id);
        return view('Admin.fornecedor.fornecedor', compact( 'fornecedor') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fornecedor =  Fornecedore::find($id);
        return view('admin.editCategoria', compact( 'fornecedor') );
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
        if(!$fornecedor = Fornecedore::find($id))
        return redirect()->back();
       $fornecedor->update($request->all());
       return redirect()->route('categoria.index');
    }

       /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletar($id)
    {
        $fornecedor =  Fornecedore::find($id);
        return view('admin.deleteCategoria', compact( 'fornecedor') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fornecedor =  Fornecedore::find($id);
        $fornecedor->delete();
        return redirect()->route('categoria.index');
    }
}
