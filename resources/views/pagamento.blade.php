@extends('layouts.app')

@section('content')

        <div class="row px-3 justify-content-center form-title flex-column my-5 text-center font-weight-bold">
            <h2>Pagamento</h2>
            <div class="d-flex align-items-center justify-content-center">
                <p class="mb-0 mr-2">Pagamento de forma rápida, fácil e segura através da plataforma</p>
                @include('icons.icon-pagseguro')
            </div>
        </div>

        <div class="row px-3 produto-valor row justify-content-center my-4">
            <div class="col-lg-6 bg-white p-3">
                <h5>Descrição:</h5>
    
                <table class="table table-striped">
                    <thead class="font-weight-bold">
                        <tr>
                            <th>Produto</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody data-filter-table>
                        <tr>
                            <td>Inscrição</td>
                            <td>R$ 120,00</td>    
                        </tr>
                    </tbody>
                </table>           
            </div>
        </div>

        <div class="row px-3 justify-content-center">
            <form id="remove" action="">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="status" value="A">
                <button type="submit" class="btn btn-success">
                    <span><a href="{{ route('confirmar', [$user_id, $produto_id]) }}">Realizar Pagamento</a></span>
                </button>
            </form>
        </div>


@section('footer')
    @include('partials.footer')
@show
@endsection
