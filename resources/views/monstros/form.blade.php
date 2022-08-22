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
        <div class="form-box">
            <label for="mName">Nome:</h2>
            <input type="text" id="mName" class="monster-name">

            <label for="mHp">Pontos de Vida:</h2>
            <input type="number" id="mHp" class="monster-hp">

            <label for="mPm">Pontos de Mana:</h2>
            <input type="number" id="mPm" class="monster-pm">

            <label for="tamanho">Tamanho</label>
            <select name="tamanho">
                <option value="min">Minúsculo</option>
                <option value="peq">Pequeno</option>
                <option value="med" selected>Médio</option>
                <option value="grd">Grande</option>
                <option value="enm">Enorme</option>
                <option value="cls">Colossal</option>
            </select>

            <label for="tipo">Tipo</label>
            <select name="tipo">
                <option value="animal">Animal</option>
                <option value="construto">Construto</option>
                <option value="espirito">Espírito</option>
                <option value="humanoide">Humanoide</option>
                <option value="monstro" selected>Monstro</option>
                <option value="morto">Morto-Vivo</option>
            </select>

            <label for="mNd">Desafio:</h2>
            <input type="number" id="mNd" class="monster-nd">

        </div>
        <div class="form-box">

            <label for="mFor">Força:</h2>
            <input type="number" id="mFor" class="monster-for">

            <label for="mDes">Destreza:</h2>
            <input type="number" id="mDes" class="monster-des">

            <label for="mCon">Constituição:</h2>
            <input type="number" id="mCon" class="monster-con">

            <label for="mInt">Inteligência:</h2>
            <input type="number" id="mInt" class="monster-int">

            <label for="mSab">Sabedoria:</h2>
            <input type="number" id="mSab" class="monster-sab">

            <label for="mCar">Carisma:</h2>
            <input type="number" id="mCar" class="monster-car">
        </div>

        <div class="form-box">

            <label for="mSp">Deslocamento:</h2>
            <input type="number" id="mSp" class="monster-sp">

            <label for="mAtq1">Ataque 1:</h2>
            <input type="text" id="mAtq1" class="monster-atk">

            <label for="mBon1" class="sublabel">Bônus de Acerto:</h2>
            <input type="number" id="mBon1" class="monster-substat">

            <label for="mDmg" class="sublabel">Dano:</h2>
            <input type="number" id="mDmg" class="monster-substat">

            <label for="mAtq1">Ataque 2:</h2>
                <input type="text" id="mAtq1" class="monster-atk">

                <label for="mBon1" class="sublabel">Bônus de Acerto:</h2>
                <input type="number" id="mBon1" class="monster-substat">

                <label for="mDmg" class="sublabel">Dano:</h2>
                <input type="number" id="mDmg" class="monster-substat">

        </div>

        </div>

        <div class="form-submit">

            <input type="submit" value="Send">

        </div>


    </body>
</html>
