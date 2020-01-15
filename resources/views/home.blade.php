@extends('layouts.app')

@section('content')
  <pagina tamanho="8">
    <painel titulo="Quadro de testes">
      <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>

      <div class="row">
        <div class="col-md-6">
          <caixa titulo="Testes" url="{{route('artigos.index')}}" cor="orange" icone="ion ion-pie-graph"></caixa>
        </div>
        </div>
      </div>
    </painel>

  </pagina>
@endsection
