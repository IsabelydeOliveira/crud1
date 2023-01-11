<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vizualizar</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <h1 class="text-center">Vizualizar</h1><hr>
    <div class="col-8 m-auto mt-5">
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">id da pessoa relacionada</th>
            <th scope="col">Nome da pessoa relacionada</th>
            <th scope="col">email da pessoa relacionada</th>
            <th scope="col">CEP</th>
            <th scope="col">Data Criação</th>
            <th scope="col">Ultima data</th>
          </tr>
        </thead>
        <tbody>
            @php
                $user=$modelo->find($modelo->id)->relUser;
            @endphp
          <tr>
            <th scope="row">{{$modelo->id}}</th>
            <td>{{$modelo->name}}</td>
            <td>{{$modelo->id_user}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$modelo->CEP}}</td>
            <td>{{$modelo->created_at}}</td>
            <td>{{$modelo->updated_at}}</td>
         </tr>

        </tbody>
      </table>

</div>
</body>
</html>
