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
        </div>

        <div class="top-wrapper">

            <h1>Criando seu monstro</h1>

            <p>Insira as estatísticas da criatura</p>

        </div>

        <div class="form-wrapper">
        <div class="form-left">
            <label for="mName">Nome:</h2>
            <input type="text" id="mName" class="monster-name">

            <label for="mHp">Pontos de Vida:</h2>
                <input type="text" id="mHp" class="monster-hp">

            <label for="mFor">Força:</h2>
            <input type="text" id="mFor" class="monster-for">

            <label for="mDes">Destreza:</h2>
            <input type="text" id="mDes" class="monster-des">

            <label for="mCon">Constituição:</h2>
            <input type="text" id="mCon" class="monster-con">

            <label for="mInt">Inteligência:</h2>
            <input type="text" id="mInt" class="monster-int">

            <label for="mSab">Sabedoria:</h2>
            <input type="text" id="mSab" class="monster-sab">

            <label for="mCar">Carisma:</h2>
            <input type="text" id="mCar" class="monster-car">
        </div>
        <div class="form-center">
            <label for="mTipo">Tipo:</h2>
            <input type="select" id="mTipo" class="monster-tipo">

            <label for="mXp">Experiência:</h2>
            <input type="text" id="mXp" class="monster-Xp">

            <label for="mHp">Pontos de Vida:</h2>
            <input type="text" id="mHp" class="monster-hp">

            <label for="mDes">Destreza:</h2>
            <input type="text" id="mDes" class="monster-des">

            <label for="mCon">Constituição:</h2>
            <input type="text" id="mCon" class="monster-con">

            <label for="mInt">Inteligência:</h2>
            <input type="text" id="mInt" class="monster-int">

            <label for="mSab">Sabedoria:</h2>
            <input type="text" id="mSab" class="monster-sab">

            <label for="mCar">Carisma:</h2>
            <input type="text" id="mCar" class="monster-car">
        </div>




        </div>

    </body>
</html>
