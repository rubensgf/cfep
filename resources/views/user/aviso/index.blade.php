@extends('layouts.app')

@section('content')

    @if($membro->ativo == '0' )
    <h1>
        Ainda nao recebemos a confirmacao do pagamento. 

        
            <button type="submit" class="btn btn-primary"><a href="{{ route('pagamento', [$membro->id,'1']) }}">pagar</a></button> 
        
    </h1>
    

    @elseif($membro->ativo == '0' || $membro->auditado == '0')
        <h1>
            Estamos analisando os documento para liberar a sua carteirinha 
        </h1>
    

    @elseif($membro->ativo == '2' )
        <h1>
            atencao, sua inscricao esta bloqueada, entre em contato com CFEP.
        </h1>
    
    
    @elseif($membro->ativo == '1' && $membro->vigencia <= date("Y-m-d"))
        <h1>
            Atencao, a vigência da sua inscricao venceu, renove sua inscricao clicando no botao abaixo

            <button>Renova inscricao</button>
        </h1>
    @endif
@endsection
