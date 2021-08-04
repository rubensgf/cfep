{{-- <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1, user-scalable=no"> --}}
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" type="image/x-icon" href="//f.i.uol.com.br/favicon.ico">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
    integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('input[data-mask="date"]').mask('00/00/0000');
        $('input[data-mask="cep"]').mask('00000-000');
        $('input[data-mask="phone_cel"]').mask('(00) 00000-0000');
        $('input[data-mask="phone"]').mask('(00) 0000-0000');
        $('input[data-mask="email"]').mask('A', { translation: { "A": { pattern: /[\w@\-.+]/, recursive: true }}});
        $('input[data-mask="cpf"]').mask('000.000.000-00', { reverse: true });
        $('input[data-mask="cnpj"]').mask('00.000.000/0000-00', { reverse: true });
    });
</script>

<title>CFEP - Conselho Federal de Educadores e Pedagogos</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">


