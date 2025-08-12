@extends('layouts.main_layout')
@section('content')

 <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 card p-5">
                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    <p class="display-6 text-center">Recuperar a senha</p>


                    <div class="mb-3">
                        <label for="email">Informe o seu email:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    

                    <div class="mt-4 d-flex justify-content-between">
                        <div>
                            <a href="{{ route('login') }}">Já sei a minha senha </a>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary px-5">Recuperar senha</button>
                        </div>
                    </div>
                </form>
                 {{----avaiso de que o email foi enviado para o cliente, ----}}

                 @if (session('status'))
                     <div class="alert alert-success mt-4">
                          <p>{{ session('status') }}</p>
                          <p>Se o email estiver cadastrado, um link de recuperação foi enviado para o seu email.</p>
                          <a href="{{ route('login') }}" class="btn btn-primary px-5">Voltar</a>
                    </div>
                @endif                  


                 {{---------se der algum erro na hora de criar um usuario ele vai mostrar aqui embaixo ---------}}

                @if ($errors->any())
                    <div class="alert alert-danger mt-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>


@endsection