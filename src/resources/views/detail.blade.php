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
        <div id="{{$product->id}}" class="product">
            <img src="{{'/images/'.$product->img }}" alt="" style="width: 500px; height=500px; overflow: cover">
            <h1>PREU: {{$product->preu}}</h1>
            <h2>Informació adicional</h2>
            <ul>
                <li>{{$product->procedencia}}</li>
                <li>{{$product->kcud}}</li>
                <li>{{$product->kg100g}}</li>
                <li>{{$product->greixos}}</li>
                <li>{{$product->carbohidrats}}</li>
                <li>{{$product->proteines}}</li>
            </ul>
        </div>

    </head>
    <body>
    </body>
</html>
