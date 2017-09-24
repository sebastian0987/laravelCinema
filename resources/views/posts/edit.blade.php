@extends('layouts.app')

@section('content')
    <h2>Editando Post</h2>
    @include('layouts._errors')
    @include('posts._form',['post'=>$post])
    {{--<form action="{{route('update_post_path',['post'=>$post->id])}}" method="POST">--}}

    {{--{{csrf_field()}} <!--No entendi para que sirve pero se necesita para enviar informacion-->--}}
    {{--{{method_field('PUT')}}    <!--Se utiliza para hacer creer al navegador que el form es un PUT y no un POST-->--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-8">--}}
                {{--<div class="form-group">--}}
                    {{--<label for="title">TITULO</label>--}}
                    {{--<input type="text" name="title" class="form-control" value="{{$post->title or old('title')}}"> <!--la funciona old() es para que si falla un formulario los campos no se reinicien-->--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<label for="description">DESCRIBCION</label>--}}
                    {{--<input type="text" name="description" class="form-control" value="{{$post->description or old('description')}}"></input>--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<label for="url">URL</label>--}}
                    {{--<input type="text" name="url" class="form-control" value="{{$post->url or old('url')}}">--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<button type="submit" class="btn btn-primary">Edit post</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</form>--}}
@endsection