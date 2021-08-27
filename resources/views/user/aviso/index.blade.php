@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-items-center pt-5">
        @if ($membro->ativo == '0')
            <h3>Ainda não recebemos a confirmação do pagamento.</h3>
            <button type="submit" class="btn btn-primary">
                <a href="{{ route('pagamento', [$membro->id, '1']) }}">pagar</a>
            </button>

        @elseif($membro->ativo == '0' || $membro->auditado == '0')
            <h3>Estamos analisando os documento para liberar a sua carteirinha</h3>

        @elseif($membro->ativo == '2' )
            <h3>Atenção, sua inscrição está bloqueada, entre em contato com CFEP para mais informações.</h3>

        @elseif($membro->ativo == '1' && $membro->vigencia <= date("Y-m-d")) 
            <h3>Atenção, a vigência da sua inscrição venceu, renove agora clicando no botão abaixo:</h3>
            <button>
                <a class="btn btn-primary" href="{{ route('pagamento', [$membro->id, '3']) }}">Renovar inscricao</a>
            </button>
        @endif
    </div>
@endsection
