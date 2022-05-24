<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width,initial-scale=1">
        <title>Shop</title>
        @include('partials.nav')
        <h4>Welcome {{ auth()->user()->name }} </h4>
        <h4>Balance: {{ auth()->user()->balance }} € </h4>
        <h1>Products</h1>
        @section('principal')
            <h1>Informació de la pel·lícula</h1>
            <div>
            Identificador: {{ $products->id }} <br />
            Preu: {{ $products->preu }} <br />
            Procedencia: {{ $products->procedencia }} <br />
            Kcud: {{ $products->kcud }} <br />
            </div>
        @endsection


    </head>
    <body>
    </body>
</html>
