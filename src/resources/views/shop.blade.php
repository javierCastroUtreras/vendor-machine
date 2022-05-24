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
        <div class="products">
            @foreach ($products as $product)
                <a class="item" href="localhost/detail/{{ $product->id }}">
                    <img src="../img/{{ $product->img }}" alt="" srcset="">
                    <h2>Preu: {{ $product->preu }}</h2>
                </a>
            @endforeach
        </div>
    </head>
    <body>
    </body>
</html>
