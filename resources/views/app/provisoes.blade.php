
@extends('layouts.app')
@section('content')
<div class="container">
  
<h3>Layout Provisões</h3>
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Nome do Produto</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <br>
    <div class="row">
      <div class="form-group col-4">
        <label for="exampleInputPassword1">Quantidade Minima</label>
        <input type="number" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="form-group  col-4">
        <label for="exampleInputPassword1">Quantidade Maxima</label>
        <input type="number" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="form-group  col-4">
        <label for="exampleInputPassword1">Quantidade Estocada</label>
        <input type="number" class="form-control" id="exampleInputPassword1">
      </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>


@endsection