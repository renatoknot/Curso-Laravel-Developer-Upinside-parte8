Meu nome é: {{ $user->name }}

{!! $alert !!}

{{-- Teste --}}

<?php
    echo "<h1>Sintaxe do PHP</h1>";
    if (!empty($user->email)) {
        echo "<p>[IF] O usuário informou um e-mail</p>";
    } elseif ($user) {
        echo "<p>[ELSEIF] Existe um objeto usuário</p>";
    } else {
        echo "<p>[ELSE] Não existe um objeto usuário</p>";
    }

    echo "<p>[TERNÁRIA] ". (!empty($user->email) ? 'O usuário informou o e-mail' : 'Existe um objeto usuário') ."</p>";
    echo "<p>[TERNÁRIA DUPLA] ". (!empty($user->email) ? 'O usuário informou o e-mail' : ($user ?  '<p>[ELSEIF] Existe um objeto usuário</p>' : '<p>[ELSE] Não existe um objeto usuário</p>' )) ."</p>";

    if (isset($user)) {
        echo "<p>[ISSET] Existe um usuário</p>";
    }

    if(empty($user)){
        echo "<p>[EMPTY] O usuário está vazio</p>";
    }

    $var = '1';
    switch ($var) {
        case '1':
            echo "<p>[CASE] 1</p>";
            break;

        default:
            echo "<p>[CASE] DEFAULT</p>";
            break;
    }
?>
<h1>Sintaxe do Blade</h1>

@if (!empty($user->email))
    <p>[IF] O usuário informou um e-mail</p>
@elseif ($user)
    <p>[ELSEIF] Existe um objeto usuário</p>
@else
    <p>[ELSE] Não existe um objeto usuário</p>
@endif

<p>[TERNÁRIA] {{ (!empty($user->email) ? 'O usuário informou o e-mail' : 'Existe um objeto usuário') }}</p>
<p>[TERNÁRIA DUPLA] {{ (!empty($user->email) ? 'O usuário informou o e-mail' : ($user ?  '<p>[ELSEIF] Existe um objeto usuário</p>' : '<p>[ELSE] Não existe um objeto usuário</p>' )) }}</p>

@isset($user)
    <p>[ISSET] Existe um usuário</p>
@endisset

@empty($user)
    <p>[EMPTY] O usuário está vazio</p>
@endempty

@switch($var)
    @case(1)
        <p>[CASE] 1</p>
        @break
    @case(2)
        <p>[CASE] 1</p>
        @break
    @default
        <p>[CASE] Default</p>
        @break
@endswitch
