@extends('layouts.app')

@section('content')

<main id="main" class="main-form-inscricao">
    <div class="container">
        <div class="row justify-content-center">
            <div class="form-title flex-column my-5 text-center font-weight-bold">
                <h2>Pagamento</h2>
                <p class="d-flex align-items-center justify-content-center">
                    non no no no no non o non on on ono
                </p>
                <form id="remove" action="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="status" value="A">
                        <button type="submit" class="btn btn-success"><span><a href="{{ route('confirmar', [$user_id, $produto_id]) }}">Confirmar</a> </span></button>

                    </form>
            </div>
        </div>

    </div>
</main>

@section('footer')
    @include('partials.footer')
@show
@endsection
