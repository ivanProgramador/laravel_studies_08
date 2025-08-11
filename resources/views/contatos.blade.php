@extends('layouts.main_layout')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <span class="display-3">PÁGINA DE CONTATOS</span>
            <hr>
            <p>Esta é uma página de contatos que não requer autenticação.</p>
            <p>Você pode adicionar informações de contato aqui.</p>
        </div>

        @auth
           <p class="display-6 text-success">
             Esse texto só é exibido para usuários autenticados.
           </p>
        @endauth
        @guest
           <p class="display-6 text-danger">
             Esse texto só é exibido para usuários não autenticados.
           </p>
        @endguest
    </div>
</div>

