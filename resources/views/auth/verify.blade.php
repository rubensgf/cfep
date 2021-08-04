@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu E-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de verificação foi enviado para o seu endereço de e-mail.') }}
                        </div>
                    @endif
                    <p>
                        {{ __('Para continuar, verifique seu e-mail para acessar o link de verificação.') }}
                    </p>
                    <p>
                        {{ __('Se você não recebeu o e-mail') }}, <a class="font-weight-bold" href="{{ route('verification.resend') }}">{{ __('clique aqui') }}</a> {{ __('para solicitar outro.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
