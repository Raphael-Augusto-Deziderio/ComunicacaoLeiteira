
@extends('template.template')

@section('content')
    <head>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <form class="form" method="POST" action="{{url('/solicitacao')}}">
        {{csrf_field()}}

        <table>
            <tr>
                <th>Solicitacão</th>
                <th>Nome do Criador</th>
                <th>Assinatura</th>
                <th>Ações</th>
            </tr>


                @for ($i = 0; $i < $tamanhoFiv; $i++)
                    <tr>
                        <td>Fiv</td>
                    <td>{{$selectFiv[$i]->nome}}</td>
                    <td>{{$selectFiv[$i]->assinatura}}</td>
                    <td>Aprovar</td>
                    </tr>
                @endfor


                @for ($i = 0; $i < $tamanhoInov; $i++)
                    <tr>
                        <td>Inovulacao</td>
                    <td>{{$selectInov[$i]->nome}}</td>
                    <td>{{$selectInov[$i]->assinatura}}</td>
                    <td>Aprovar</td>
                    </tr>
                @endfor


                @for ($i = 0; $i < $tamanhoNasc; $i++)
                    <tr>
                        <td>Nascimento</td>
                    <td>{{$selectNasc[$i]->nome}}</td>
                    <td>{{$selectNasc[$i]->assinatura}}</td>
                    <td>Aprovar</td>
                    </tr>
                @endfor


        </table>

        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>


@endsection