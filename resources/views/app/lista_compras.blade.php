@extends('layouts.app')
@section('content')
<h3>Layout Lista de Compras</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nº</th>
      <th scope="col">Produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">No Carrinho?</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Café</td>
      <td>2</td>
      <td>sim</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Arroz</td>
      <td>2</td>
      <td>não</td>
    </tr>
    <tr>
    <th scope="row">2</th>
      <td>feijão</td>
      <td>5</td>
      <td>não</td>
    </tr>
  </tbody>
</table>
@endsection