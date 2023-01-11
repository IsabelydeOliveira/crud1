<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cadastrar</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <h1 class="text-center">@if(@isset($modelo)) Editar @else Cadastrar @endif</h1><hr>
    <div class="col-8 m-auto mt-5">

    @if (isset($modelo))
         <form name="formEdit" id="formEdit" method="post" action="{{ route('Model01.update', [$modelo->id])}}">
            @method('PUT')
            @else
        <form name="formCad" id="formCad" method="post" action="{{route('Model01.store')}}">
    @endif

            @csrf
            <input class="form-control" type="text" name="name" id="name" placeholder="Nome hospital" value="{{$modelo->name ?? ''}}" required ><br>
            <input class="form-control" type="text" name="cep" id="cep" placeholder="CEP" value="{{$modelo->cep ?? ''}}" required ><br>
            <select class="form-control" name="id_user" id="id_user"  required >
                <option value="{{$modelo->relUser->id ?? ''}}" >{{$modelo->relUser->name ?? 'Pessoa relacionada'}}</option>
                @foreach ( $users as $user )
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select><br>
            <input class="btn btn-primary" type="submit" value="Confirmar">

        </form>

    </div>
</body>
</html>
