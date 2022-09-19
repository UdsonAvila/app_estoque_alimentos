@extends('layouts.app')
@section('content')
<div class="container">
<h3>Layout Lista de Compras</h3>
<div class="table-responsive">
<table class="table table-hover"  aria-describedby="mydesc">
  <thead>
    <tr>
      <th scope="col" style="width: 5%;">Itens</th>
      <th scope="col"  style="width: 10%;">No Carrinho?</th>
      <th scope="col" style="width: 15%;">Quantidade</th>
      <th scope="col">Produto</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>sim</td>
      <td>2</td>
      <td>Café</td>
    </tr>
   
    <tr>
    <th scope="row">2</th>
      <td>não</td>
      <td>5</td>
      <td>feijão</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>não</td>
      <td>2</td>
      
      <td>Arroz</td>
    </tr>
  </tbody>
</table>
</div>
</div>
@endsection