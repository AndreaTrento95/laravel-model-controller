 {{-- COSE DA FARE PER PARTIRE CON UN PREGETTO LARAVEL
1 La cartella del progetto non deve essere una cartella virtuale (es desktop per win)
2 in questa cartella generare da linea di comando il progetto con questo comando
composer create-project --prefer-dist laravel/laravel:^7.0 MyProject
3 una volta generato php artisan serve per accendere il server locale
4 aggiungere in webpack.mix.js
    .options({
        processCssUrls: false
    });
5 npm install per tutte le dipendenze frontend
6 npm run watch per far partire il compilatore SASS

7 php artisan make:controller HomeController
--}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Home</title>
    </head>
    <body>
{{-- Esercizio di oggi:
nome repo: laravel-model-controller
Create un nuovo progetto Laravel 7 e tramite phpMyAdmin create un nuovo database.
Importate nel vostro database la tabella movies in allegato e inserite le vostre credenziali per il database nel file .env.
Create un model Movie e un controller che gestirà la rotta /.
All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
BONUS:
Stilare il layout nei dettagli con Sass --}}
       @yield('content')
    </body>
</html>
