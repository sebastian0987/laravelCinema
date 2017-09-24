@extends('layouts.app')
@section('content')
    <html>
    <head>
        <title>REDDIT</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>

    <body>
    <div class="container">
        <div class="row">
            <h1>Reddit Clone</h1>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <h2>{{$post->title}}</h2>
                <p>{{$post->description}}</p>
                <p>Posted {{$post->created_at->diffForHumans()}}</p>
            </div>
        </div>
    </div>
    </body>
    </html>
@endsection