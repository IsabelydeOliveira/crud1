<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud com Laravel</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
  <h1 class="text-center">crud</h1>
<div class="text-center mt-3 mb-4">
<a href="">
          <button class="btn btn-success">Cadastrar</button>
        </a>
</div>

 <div class="col-8 m-auto">
<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">CEP</th>
      <th scope="col">Pessoa</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($modelo as $modelos)
  @php
    $user=$modelos->find($modelos->id)->relUser;
  @endphp
    <tr>
      <th scope="row">{{$modelos->id}}</th>
      <td>{{$modelos->name}}</td>
      <td>{{$modelos->CEP}}</td>
      <td>{{$user->name}}</td>
      <td>
        <a href="{{ route('Model01.show', [$modelos->id]) }}">
          <button class="btn btn-dark">Vizualizar</button>
        </a>
        <a href="">
          <button class="btn btn-primary">Editar</button>
        </a>
        <a href="">
          <button class="btn btn-danger">Deltar</button>
        </a>
      </td>

  </tr>

     @endforeach
  </tbody>
</table>
<div>
</body>
</html>
