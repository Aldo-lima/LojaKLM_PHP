@extends('Admin.layouts.principal')
@section('container-principal')
<div class="card"  id="cad_list">
    <div class="card-header">
      Fornecedores
    </div>
      <br>
      <div class="row">
         <div class="col-7">
         </div>
         <div class="col-4" >
           <form class="d-flex"  action="{{route('fornecedor.search')}}" method="POST"  >
              @csrf
               <input class="form-control me-2" name="nome"  type="text" placeholder="categoria" aria-label="Search">
                  <button class="btn btn-outline-success" type="search">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg> </button>
            </form>
         </div>
      </div>
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
        <th scope="col">Nome</th>
        <th scope="col">Razão Social</th>
        <th scope="col">Detalhes</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          @forelse ( $fornecedores as $fornecedor )
        <th scope="row">{{$fornecedor->id}}</th>
        <td>{{$fornecedor->categoria->nome}}</td>
        <td>{{$fornecedor->nome}}</td>
        <td>{{$fornecedor->nome_r}}</td>
        <td><a href="{{route('fornecedor.show', $fornecedor->id)}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
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
  <a href="{{route('fornecedor.create')}}"  type="button" class="btn btn-outline-primary">Adicionar</a>
    </div>
</div>
@endsection
