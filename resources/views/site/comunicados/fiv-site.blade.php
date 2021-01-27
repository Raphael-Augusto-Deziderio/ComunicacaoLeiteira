@extends('template.template')

@section('content')
    <form class="form" method="POST" action="{{url('/comunicado-fiv')}}">
    {{csrf_field()}}

        <div class="form-group row">
            <label for="id_criador" class="col-4 col-form-label">Nome do Criador:</label>
            <div class="col-8">
                <select id="id_criador" name="id_criador">
                    @for ($i = 0; $i < $tamanho; $i++)
                        <option value="{{$user[$i]->id}}">{{$user[$i]->nome}}</option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="numEmbrioes" class="col-4 col-form-label">Número de Embriões:</label>
            <div class="col-8">
                <input id="numEmbrioes" name="numEmbrioes" placeholder="Insira o Número de Embriões"  type="text" required="required" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="numEmbrioes" class="col-4 col-form-label">Data de Aquisição:</label>
            <div class="col-8">
                <input id="dataAquisicao" name="dataAquisicao"  type="date" required="required" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="matriz" class="col-4 col-form-label">Matriz Doadora:</label>
            <div class="col-8">
                <input id="matriz" name="matriz" placeholder="Insira a Matriz Doadora" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="reprodutor" class="col-4 col-form-label">Reprodutor Utilizado:</label>
            <div class="col-8">
                <input id="reprodutor" name="reprodutor" placeholder="Insira o Reprodutor Utilizado" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nomePertence" class="col-4 col-form-label">Nome a quem pertence:</label>
            <div class="col-8">
                <input id="nomePertence" name="nomePertence" placeholder="Insira o nome a quem pertence" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="numControleRegistro" class="col-4 col-form-label">Número de Controle ou Registro:</label>
            <div class="col-8">
                <input id="numControleRegistro" name="numControleRegistro" placeholder="Insira o Número de Controle ou Registro" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="raca" class="col-4 col-form-label">Raça:</label>
            <div class="col-8">
                <select id="raca" name="raca" required="required" class="custom-select">
                    <option value="1">Raça 1</option>
                    <option value="2">Raça 2</option>
                    <option value="3">Raça 3</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="categoria" class="col-4 col-form-label">Categoria:</label>
            <div class="col-8">
                <select id="categoria" name="categoria" class="custom-select">
                    <option value="1">Categoria 1</option>
                    <option value="2">Categoria 2</option>
                    <option value="3">Categoria 3</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="matrizReceptora" class="col-4 col-form-label">Registro da Matriz Receptora:</label>
            <div class="col-8">
                <input id="matrizReceptora" name="matrizReceptora" placeholder="Insira o número da Matriz Receptora" type="text" required="required" class="form-control">
            </div>
        </div>

        @if($userPermissao == 'funcionario')
        <div class="form-group row">
            <label for="assinatura" class="col-4 col-form-label">Sou Veterinário e concordo com as informações prestadas acima:</label>
            <div class="col-8">
                <input id="assinatura" value="veterinario" name="assinatura" placeholder="Insira o número da Matriz Receptora" type="radio" required="required" class="form-control">
            </div>
        </div>
        @else
            <div class="form-group row">
                <label for="assinatura" class="col-4 col-form-label">Sou Criador e concordo com as informações prestadas acima:</label>
                <div class="col-8">
                    <input id="assinatura" value="criador" name="assinatura" placeholder="Insira o número da Matriz Receptora" type="radio" required="required" class="form-control">
                </div>
            </div>
            @endif



        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection