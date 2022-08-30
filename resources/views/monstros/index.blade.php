<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <style>
            @font-face {
                font-family: "T20";
                src: url('fonts/t20font.ttf') format('truetype');
                font-weight: normal;
            }

            body {
                font-family: "T20";
                font-weight: normal;
            }

        </style>

        <link rel="stylesheet" href="\css\app.css">

        <script src="/js/scripts.js"></script>

    </head>
    <body>



        <div class="heading">
            <img src="/img/t20logo.png" alt="Logo">
        </div>

        <div class="top-wrapper">

            <h1>Compêndio Monstruoso</h1>
            <p>Sua referência rápida para matar personagens vacilões.</p>


            <div>
                <a type="button" class="btn" href="/form">Criar um Monstro</a>
            </div>
        </div>

        <div class="bottom-wrapper">
            <div class="table-wrapper">
                <table class="main-table">
                <tr class="table-head">
                    <th>Nome</th>
                    <th>Desafio</th>
                    <th>Tipo</th>
                    <th>Defesa</th>
                    <th>Ataque</th>
                    <th>Deslocamento</th>
                    <th>Ações</th>
                </tr>

        @foreach ($monstros as $monstro)
            <tr class="basic-info">
                <td>{{$monstro->nome}}</td>
                <td>{{$monstro->desafio}}</td>
                <td>{{$monstro->tipo->nome}}</td>
                <td>{{$monstro->stat->defesa}}</td>
                @if ($monstro->ataque->count() != 0)
                    <td>{{$monstro->ataque->first()->nome}}</td>
                @else
                    <td>N/A</td>
                @endif
                <td>{{$monstro->stat->deslocamento}} metros</td>
                <td>
                    <a type="button" class="btn" href="">Visualizar</a>
                    <a type="button" class="btn" href="">Editar</a>
                </td>
            </tr>
        @endforeach
                </table>

            </div>
        </div>

    </body>
</html>
