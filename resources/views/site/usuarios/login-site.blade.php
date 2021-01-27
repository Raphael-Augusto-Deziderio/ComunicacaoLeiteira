@extends('template.template')

@section('content')

    <h1 class="title">
       Login
    </h1>

        <form class="form" method="POST" action="{{url('/login')}}">
            {{csrf_field()}}

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group row">
                <label for="nome" class="col-4 col-form-label">Nome:</label>
                <div class="col-8">
                    <input id="nome" name="nome" placeholder="Insira o Nome" type="text" required="required" class="form-control">
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