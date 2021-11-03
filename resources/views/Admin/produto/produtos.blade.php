@extends('Admin.layouts.principal')

@section('container-principal')
<div class="card"  id="cad_list">
    <div class="card-header">
      Produtos
    </div>
      <br>
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
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Fornecedor</th>
        <th scope="col">Detalhes</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          @forelse ( $produtos as $produto )
        <th scope="row">{{$produto->id}}</th>
        <td>{{$produto->produto}}</td>
        <td>{{$produto->descricao}}</td>
        <td>{{$produto->fornecedore->nome}}</td>
        <td><a href="{{route('produto.show', $produto->id)}}">
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
  <a href="{{route('produto.create')}}"  type="button" class="btn btn-outline-primary">Adicionar</a>
    </div>

</div>
@endsection
