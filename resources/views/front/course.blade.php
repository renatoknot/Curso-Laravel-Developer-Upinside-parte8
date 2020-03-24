@extends('front.master.master-with-sidebar')

@section('title', 'O melhor curso de Laravel do Brasil')

@section('css')
    <style>
        .teste {
            color: purple;
        }
    </style>
@endsection

@section('js')
    <script>alert('teste')</script>
@endsection

@section('sidebar')
    @parent
    <h1 class="teste">Listagem de artigos</h1>

    <ul>
        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, sit.</li>
        <li>Neque, beatae. Eos exercitationem delectus voluptate, officia quam excepturi doloribus?</li>
        <li>Omnis facilis consequuntur et, dolorem minima corporis! Perspiciatis, excepturi minima.</li>
    </ul>

@endsection

@section('content')
    <h1>Conteúdo</h1>
@endsection
