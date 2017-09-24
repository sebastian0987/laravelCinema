@extends('layouts.app')

@section('content')
    <h2>Creando post</h2>
    @include('layouts._errors')
    @include('posts._form',['post'=>$post])
    {{--<form action="{{route('store_post_path')}}" method="POST">--}}

        {{--{{csrf_field()}} <!--No entendi para que sirve pero se necesita para enviar informacion-->--}}

        {{--<div class="row">--}}
            {{--<div class="col-lg-8">--}}
                {{--<div class="form-group">--}}
                    {{--<label for="title">TITULO</label>--}}
                    {{--<input type="text" name="title" class="form-control" value="{{$post->title or old('title')}}"> <!--la funciona old() es para que si falla un formulario los campos no se reinicien-->--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<label for="description">DESCRIBCION</label>--}}
                    {{--<textarea rows="5" name="description" class="form-control" value="{{$post->description or old('description')}}"></textarea>--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<label for="url">URL</label>--}}
                    {{--<input type="text" name="url" class="form-control" value="{{$post->url or old('url')}}">--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<button type="submit" class="btn btn-primary">Crear post</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</form>--}}
@endsection