@extends('layouts.main_layout')
@section('content')
    <div class="container-fluid">
        <div class="row bg-black text-white">
            <div class="col align-content-center">
                <p class="display-6">{{ env('APP_NAME') }}</p>
            </div>
            <div class="col d-flex justify-content-end align-items-center gap-5 p-3">
                <span>Usuário: <strong class="text-info">
                    {{ Auth::user()->name; }}</strong></span>
                <span>Email: <strong class="text-info">
                    {{ Auth::user()->email; }}

                </strong></span>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
                


            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">

                <span class="display-3">PÁGINA INICIAL</span>

                <hr>
                 <a href="{{ route('contatos') }}">Ver a pagina de contatos (pagina aberta que não precisa autenticação)</a>

            </div>
        </div>
    </div>
@endsection