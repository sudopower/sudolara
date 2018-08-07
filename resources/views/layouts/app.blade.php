<!doctype html>
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
        <div class="container">
                <div class="jumbotron">
                        <h1>{{$title}}</h1>
                        <p class="lead">Simple Laravel Blog</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4"><button class="btn btn-lg btn-success" href="/services" role="button">Please Click Here</button></div>
                                <div class="col-md-4"></div>
                                <div  class="col-md-4"><button class="btn btn-lg btn-danger" href="/" role="button">Dont Click Here</button></div>
                            </div>
                        </div>
                      </div>
                
                @yield('content')
            
        </div>
        
    </body>
</html>
