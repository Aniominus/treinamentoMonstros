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

        <link rel="stylesheet" href="\css\style.css">

        <script src="/js/scripts.js"></script>

    </head>
    <body class="base">

        <div class="heading">
            <img src="/img/t20logo.png" alt="Logo">

            <h1>Compêndio Monstruoso</h1>
        </div>

        <p>Sua referência rápida para matar personagens vacilões.</p>

        <div class="main-wrapper">
            <table class="main-table">
                <tr class="table-strut">
                    <th>Nome</th>
                    <th>Desafio</th>
                    <th>Tipo</th>
                    <th>Defesa</th>
                    <th>Ataque</th>
                    <th>Deslocamento</th>
                    <th>Ações</th>
                </tr>
                <tr>
                    <td>Goblin</td>
                    <td>1/4</td>
                    <td>Humanoide</td>
                    <td>13</td>
                    <td>+5</td>
                    <td>9 metros</td>
                </tr>
                <tr>
                    <td>Esqueleto</td>
                    <td>1/2</td>
                    <td>Morto-Vivo</td>
                    <td>15</td>
                    <td>+7</td>
                    <td>12 metros</td>
                </tr>
                <tr>
                    <td>Orc</td>
                    <td>1</td>
                    <td>Humanoide</td>
                    <td>16</td>
                    <td>+9</td>
                    <td>9 metros</td>
                </tr>

            </table>

        </div>
    </body>
</html>
