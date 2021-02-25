<!DOCTYPE html>
<html lang="es_MX">

<head>
    <title>{{$error}} | Laboratorios Virtuales</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
</head>
<body>
    <div class="app" style="height: 100%">
        <div class="app-container app-error-container">
            <div class="app-error">
                <div class="app-error-code">{{$error}}</div>
                <div class="app-error-message">{{$msj}}</div>
            </div>
        </div>
    </div>
</body>

</html>
