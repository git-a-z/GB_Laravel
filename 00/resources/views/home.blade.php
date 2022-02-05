<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <style>
            body {
                text-align:center;
            }
        </style>
    </head>
    <body>
        <a href="/home">home</a>
        <a href="/category">categories</a>
        <a href="/news">news</a>
        <h1>Home page</h1>
        <hr>
        <div><a href='/category'>Categories</a></div>
        <div><a href='/news'>News</a></div>
        <hr>        
    </body>
</html>