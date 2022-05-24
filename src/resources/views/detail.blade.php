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

         {{$product->img}}
         {{$product->id}}
         {{$product->preu}}
         {{$product->procedencia}}
         {{$product->kcud}}
         {{$product->kg100g}}
         {{$product->greixos}}
        {{ $product->carbohidrats}}
         {{$product->proteines}}
    </head>
    <body>
    </body>
</html>
