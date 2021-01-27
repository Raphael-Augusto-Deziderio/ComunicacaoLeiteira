
@extends('template.template')

@section('content')
    <form class="form" method="POST" action="{{url('/comunicado-inovulacao')}}">
    {{csrf_field()}}

        <div class="form-group row">
            <label for="id_criador" class="col-4 col-form-label">Nome do Criador:</label>
            <div class="col-8">
                <select id="id_criador" name="id_criador">
                    @for ($i = 0; $i < $tamanhoUser; $i++)
                        <option value="{{$user[$i]->id}}">{{$user[$i]->nome}}</option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="numControleRegistro" class="col-4 col-form-label">A qual FIV me refiro:</label>
            <div class="col-8">
                <select id="id_fiv" name="id_fiv">
                    @for ($i = 0; $i < $tamanhoFiv; $i++)
                        <option value="{{$fiv[$i]->id}}">{{$fiv[$i]->numControleRegistro}}</option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inovulacao" class="col-4 col-form-label">Houve de fato a Inovulação:</label>
            <div class="col-8">
                <input id="inovulacao" value="1" name="inovulacao" placeholder="Insira o número da Matriz Receptora" type="radio" required="required" class="form-control">
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