@extends('Admin.layouts.principal')

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
        <th scope="col">Codigo</th>
        <th scope="col">Categoria</th>
        <th scope="col">editar</th>
        </tr>
    </thead>
    <tbody>
      <tr>
          @forelse ( $categorias as $categoria )
        <th scope="row">{{$categoria->id}}</th>
        <td>{{$categoria->nome}}</td>
        <td><a href="{{route('categoria.edit', $categoria->id)}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg>
        </a></td>
      

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
