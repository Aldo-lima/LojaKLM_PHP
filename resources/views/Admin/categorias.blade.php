@extends('admin.layouts.principal')

@section('container-principal')

<div class="card" id="card_categoria">
    <h5 class="card-header">Categoria</h5>
    <div class="card-body">
      @if (session('sucesso'))
       <div>
           {{session('sucesso')}}
       </div>
       @endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">Categoria</th>
        <th scope="col">detalhes</th>
        <th scope="col">editar</th>
        <th scope="col">pagar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          @forelse ( $categorias as $categoria )
        <th scope="row">{{$categoria->nome}}</th>
        <td><a href="{{route('categoria.show', $categoria->id)}}">ver</a></td>
        <td><a href="{{route('categoria.edit', $categoria->id)}}">Editar</a></td>
        <td><a href="{{route('categoria.deletar', $categoria->id)}}">Apagar</a></td>
      </tr>
      @empty
         <th>
             <td  colspan="2" >não ha cidades relacionadas</td>
         </th>
      @endforelse

     </tbody>
  </table>
  <a href="{{route('categoria.create')}}"  type="button" class="btn btn-outline-primary">Adicionar</a>
    </div>
</div>

@endsection
