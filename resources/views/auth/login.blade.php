@extends('layouts.master')

@section('content')
    <div class="container pt-4">
        <div class="row justify-content-center my-4">
            <div class="col-md-8">
                <p class="text-center fs-16">A Identidade Profissional serve não só para identifica-lo, mas também
                    disponibilizara benefícios e vantagens em
                    nossa rede de estabelecimentos conveniados.</p>
            </div>
        </div>
        <div class="row justify-content-center my-4">
            <div class="col-md-6
                    d-flex
                    justify-content-md-end
                    justify-content-center
                    align-items-md-center
                    font-weight-bold">
                <span class="fs-14">Ainda não tem uma conta?</span>
            </div>
            <div class="col-md-6
                    d-md-block
                    d-flex
                    justify-content-md-start
                    justify-content-center
                    mt-2
                    mt-md-0">
                <a class="btn btn-outline-info" href="{{ route('inscricao') }}">Faça sua inscrição</a>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-7 col-lg-5">
                <div class="card py-3 px-4 border-0">
                    {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">{{ __('E-mail') }}</label>

                                <input id="email" type="email"
                                    class="form-control form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Senha') }}</label>

                                <input id="password" type="password"
                                    class="form-control form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-right btn-block" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Entrar') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- @section('footer')
            @include('partials.footer')
        @show --}}
    </div>
@endsection
