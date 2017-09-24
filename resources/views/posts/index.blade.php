@extends('layouts.app')
@section('content')
    @foreach($posts as $post)

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>
                    <a href="{{route('post_path',['post'=>$post->id])}}"> {{$post->title}}</a>
                    <small class="pull-right">
                        <a href="{{route('edit_post_path',['post'=>$post->id])}}" class="btn btn-info">Edit</a>
                        <form action="{{route('delete_post_path',['post'=>$post->id])}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </small>
                </h2>
                <p>Posted {{$post->created_at->diffForHumans()}}</p><!--diffForHumans cambia la fecha por una oracion donde dice hace cuanto tiempo fue creado-->
            </div>
        </div>
        <hr>
    </div>
    @endforeach

    {{$posts->render()}}
@endsection