@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verifique seu e-mail</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Um link de verificação foi enviado para o seu e-mail
                        </div>
                    @endif

                    Antes de continuar, por favor, verifique seu e-mail por uma mensagem de verificação.
                    Se não tiver recebido,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Clique aqui para solicitar novamente.</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
