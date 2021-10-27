<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Fornecedore;

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
        return view('admin.fornecedor.formfornecedor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Fornecedore::create($request->all());
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
        return view('admin.categoria', compact( 'categoria') );
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
