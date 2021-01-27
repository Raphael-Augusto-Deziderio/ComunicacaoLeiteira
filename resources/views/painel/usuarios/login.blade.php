@extends('template.template')

@section('content')

    <h1 class="title">
       Login
    </h1>

        <form class="form" method="POST" action="{{url('/login')}}">
            {{csrf_field()}}

            <div class="form-group cad-edit">
                Nome:   <input type="text" name="nome" placeholder="Insira o Nome" class="form-control" value="{{$data->nome or  old('nome')}}">
            </div>

            <div class="form-group cad-edit">
                Senha: <input type="password" name="password" placeholder="Insira a Senha" class="form-control" value="{{old('password')}}">
            </div>

            <br>

            <div class="form-group">
                <input type="submit" id="enviarUsuario" name="enviar" value="Enviar" class="btn btn-success">
            </div>
        </form>
@endsection