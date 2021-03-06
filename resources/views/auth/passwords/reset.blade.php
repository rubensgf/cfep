@extends('layouts.master')

@section('content')
    <div class="container pt-5 mt-5">
        <div class="row justify-content-center my-4 ">
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
                <a class="btn btn-outline-info" href="../../inscricao.blade.php">Faça sua inscrição</a>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-7 col-lg-5">
                <div class="card">
                    <div class="card-header">{{ __('Redefinir senha') }}</div>

                    <div class="card-body p-4 px-md-5">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group">
                                <label for="email" class="col-form-label">{{ __('E-mail') }}</label>

                                <div class="">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                        autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-form-label">{{ __('Nova senha') }}</label>

                                <div>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm"
                                    class="col-form-label">{{ __('Confirme a nova senha') }}</label>

                                <div>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary w-100">
                                        {{ __('Confirmar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
