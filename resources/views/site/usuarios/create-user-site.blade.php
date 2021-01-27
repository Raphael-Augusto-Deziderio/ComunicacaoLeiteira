@extends('template.template')

@section('content')



    <div class="container">
        <br>
        <h1 class="title">
            Gestão de Usuários
        </h1>

        <br>
        @if(isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}} <br>
                @endforeach
            </div>

        @endif

        @if(isset($data))
            <form class="form" method="POST" action="{{$data->id}}">
                @else
                    <form class="form" method="POST" action="{{url('/create-user')}}">
                        @endif
                        {{csrf_field()}}
                            <div class="form-group row">
                                <label for="nome" class="col-4 col-form-label">Nome:</label>
                                <div class="col-8">
                                    <input id="nome" name="nome" placeholder="Nome" type="text" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email:</label>
                                <div class="col-8">
                                    <input id="email" name="email" placeholder="Insira o Email" type="text" class="form-control" required="required">
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="permissao" class="col-4 col-form-label">Permissão:</label>
                            <div class="col-8">
                                <select id="permissao" name="permissao">
                                    <option value="criador">Sou Criador</option>
                                    <option value="funcionario">Sou Funcionário</option>
                                    <option value="administrador">Sou Administrador</option>

                                </select>
                            </div>
                        </div>

                            <div class="form-group row">
                                <label for="password" class="col-4 col-form-label">Senha:</label>
                                <div class="col-8">
                                    <input id="password" name="password" placeholder="Insira a Senha" type="password" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>

@endsection
