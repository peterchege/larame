{{-- <!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">

            <h1> Post {{$id}} {{$name}} {{$password}} </h1>

        </div>
    </body>
</html> --}}

@extends('layout.app')





@section('content')

    <h1> Post Page {{$id}} {{$name}} {{$password}} </h1>

@stop

