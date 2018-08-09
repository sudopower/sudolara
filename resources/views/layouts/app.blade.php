<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('/css/app.css')}}"  rel="stylesheet">
        <title>{{config('app.name', 'SUDOLARA')}}</title>
    </head>
    <body>
        @include('inc.navbar')
        @include('inc.banner')
        @include('inc.messages')
        @yield('content')
            
        </div>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>
</html>
