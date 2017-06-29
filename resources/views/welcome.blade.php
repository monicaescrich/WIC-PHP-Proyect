<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WalkInCloset</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/style_welcome.css" rel="stylesheet" type="text/css">

        
    </head>
    <body>
        <div class="flex-center position-ref full-height img-bg" >
            <div class="content">
                <div class="title m-b-md">
                    <br><br><br><br>
                    <?=$tittle?>
                </div>
                <div class="links">
                    @foreach($products as $product)
                    <a href="/{{$product->descripcion}}">{{$product->descripcion}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
