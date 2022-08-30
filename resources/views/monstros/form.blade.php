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

    <body class="base">

        <div class="heading">
            <img src="/img/t20logo.png" alt="Logo">
        </div>

        <div class="top-wrapper">

            <h1>Criando seu monstro</h1>

            <p>Insira as estatísticas da criatura</p>

        </div>

        @if (isset($monstro))
            {!! Form::open(['route' => array('monstros.update', $monstro->id), 'method' => 'PUT', 'name' => 'form'])!!}
        @else
            {!! Form::open(['route' => array('monstros.store'), 'method' => 'POST', 'name' => 'form'])!!}
        @endif

        <div class="form-wrapper">
        <div class="form-box">
            {!!Form::label('nome', 'Nome:')!!}
            {!!Form::text('nome',   isset($monstro) ? $monstro->nome : null, ['placeholder' => 'Somente Letras',  $form??null])!!}

            {!!Form::label('pontosdevida', 'Pontos de Vida:')!!}
            {!!Form::number('pontosdevida',   isset($monstro) ? $monstro->stat->pontosdevida : null, ['min' => 1, $form??null])!!}

            {!!Form::label('pontosdemana', 'Pontos de Mana:')!!}
            {!!Form::number('pontosdemana',   isset($monstro) ? $monstro->stat->pontosdemana : null, ['max' => 999, 'min' => 0, $form??null])!!}

            {!!Form::label('tamanho', 'Tamanho:')!!}
            {!!Form::select('tamanhos', $tamanhos, isset($monstro) ? $monstro->tamanho->nome : null, [$form??null])!!}

            {!!Form::label('tipo', 'Tipo:')!!}
            {!!Form::select('tipo', $tipos, isset($monstro) ? $monstro->tipo->nome : null, [$form??null])!!}

            {!!Form::label('desafio', 'Desafio:')!!}
            {!!Form::number('desafio',   isset($monstro) ? $monstro->desafio : null, ['step'=>0.05, 'max' => 30, 'min' => 0, $form??null])!!}

        </div>
        <div class="form-box">

            {!!Form::label('forca', 'Força:')!!}
            {!!Form::number('forca',   isset($monstro) ? $monstro->stat->forca : null, ['max' => 99, 'min' => 0, $form??null])!!}

            {!!Form::label('destreza', 'Destreza:')!!}
            {!!Form::number('destreza',   isset($monstro) ? $monstro->stat->destreza : null, ['max' => 99, 'min' => 0, $form??null])!!}

            {!!Form::label('constituicao', 'Constituição:')!!}
            {!!Form::number('constituicao',   isset($monstro) ? $monstro->stat->constituicao : null, ['max' => 99, 'min' => 0, $form??null])!!}

            {!!Form::label('inteligencia', 'Inteligência:')!!}
            {!!Form::number('inteligencia',   isset($monstro) ? $monstro->stat->inteligencia : null, ['max' => 99, 'min' => 0, $form??null])!!}

            {!!Form::label('Sabedoria', 'Sabedoria:')!!}
            {!!Form::number('sabedoria',   isset($monstro) ? $monstro->stat->sabedoria : null, ['max' => 99, 'min' => 0, $form??null])!!}

            {!!Form::label('carisma', 'Carisma:')!!}
            {!!Form::number('carisma',   isset($monstro) ? $monstro->stat->carisma : null, ['max' => 99, 'min' => 0, $form??null])!!}
        </div>

        <div class="form-box">

            <label for="mSp">Deslocamento:</h2>
            <input type="number" id="mSp" class="monster-sp">

            <label for="mAtq1">Ataque 1:</h2>
            <input type="text" id="mAtq1" class="monster-atk">

            <label for="mBon1" class="sublabel">Bônus de Acerto:</h2>
            <input type="number" id="mBon1" class="monster-substat" min="1" max="99">

            <label for="mDmg1" class="sublabel">Dano:</h2>
            <input type="text" id="mDmg1" class="monster-substat">

            <label for="mAtq2">Ataque 2:</h2>
                <input type="text" id="mAtq2" class="monster-atk">

                <label for="mBon2" class="sublabel">Bônus de Acerto:</h2>
                <input type="number" id="mBon2" class="monster-substat" min="1" max="99">

                <label for="mDmg2" class="sublabel">Dano:</h2>
                <input type="text" id="mDmg2" class="monster-substat">

        </div>

        </div>

        <div class="form-submit">

            {!! Form::submit('Salvar', ['class' => 'btn', $form??null]); !!}

        </div>

        {!! Form::close() !!}

        <div class="form-submit">

    @if (isset($monstro))
        {!! Form::open(['route' => array('monstros.destroy', $monstro->id), 'method' => 'DELETE', 'name' => 'form'])!!}
        {!! Form::submit('Excluir', ['class' => 'btn', $form??null]); !!}
        {!! Form::close() !!}
    @endif

        </div>

    </body>
</html>
