<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" type="image/x-icon" href="/images/icon-logo-cfep.png">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>

<script>
    $(document).ready(function($) {
        $('input[data-mask="date"]').mask('00/00/0000');
        $('input[data-mask="cep"]').mask('00000-000');
        $('input[data-mask="rg"]').mask('000.000.000');
        $('input[data-mask="phone_cel"]').mask('(00) 00000-0000');
        $('input[data-mask="phone"]').mask('(00) 0000-0000');
        $('input[data-mask="email"]').mask("A", {
            translation: {
                "A": {
                    pattern: /[\w@\-.+]/,
                    recursive: true
                }
            }
        });
        $('.mixed').mask('AAA 000-S0S');
        $('input[data-mask="cpf"]').mask('000.000.000-00', {
            reverse: true
        });
        $('input[data-mask="cnpj"]').mask('00.000.000/0000-00', {
            reverse: true
        });
        $('.money').mask('000.000.000.000.000,00', {
            reverse: true
        });
    });
</script>

<script src="{{ asset('js/app.js') }}" defer></script>

<title>CFEP - Conselho Federal de Educadores e Pedagogos</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
