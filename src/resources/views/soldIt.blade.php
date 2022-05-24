<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width,initial-scale=1">
        <title>SOLD</title>
        @include('partials.nav')
        <h4> PRODUCT SOLD TO{{ auth()->user()->name }} </h4>


        <H3>REDIRECTING....</H3>


        {{sleep(5);
            header('Location: login'); }}



    </head>
    <body>
    </body>
</html>
