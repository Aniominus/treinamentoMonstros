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

            <div>
                <a type="button" class="btn" href="{{route('monstros.index')}}">Voltar</a>
            </div>

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
            {!!Form::select('tamanho', $tamanhos, isset($monstro) ? $monstro->tamanho->id : null, [isset($form) ? $form : null])!!}

            {!!Form::label('tipo', 'Tipo:')!!}
            {!!Form::select('tipo', $tipos, isset($monstro) ? $monstro->tipo->id : null, [$form??null])!!}

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

            {!!Form::label('deslocamento', 'Deslocamento (Metros):')!!}
            {!!Form::number('deslocamento',   isset($monstro) ? $monstro->stat->deslocamento : null, ['max' => 100, 'min' => 0, $form??null])!!}

            {!!Form::label('defesa', 'Defesa:')!!}
            {!!Form::number('defesa',   isset($monstro) ? $monstro->stat->defesa : null, ['max' => 100, 'min' => 1, $form??null])!!}

            {!!Form::label('ataque[]', 'Ataque 1:')!!}
            {!!Form::select('ataque[]', $ataques, (isset($monstro) && $monstro->ataque->get(0) !=null) ? $monstro->ataque->get(0)->id : null, ['placeholder'=>'' , $form??null])!!}

            {!!Form::label('ataque[]', 'Ataque 2:')!!}
            {!!Form::select('ataque[]', $ataques, (isset($monstro) && $monstro->ataque->get(1) !=null) ? $monstro->ataque->get(1)->id : null, ['placeholder'=>'' , $form??null])!!}

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
