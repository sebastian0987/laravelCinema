<?php

namespace Cinema\Http\Controllers;

use Cinema\Http\Requests\CreatePostRequest;
use Cinema\Http\Requests\UpdatePostRequest;
use Cinema\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public  function index(){
        //Se ordena de forma descendente y se obtienen todos los datos
//        $posts = Posts::orderBy('id','desc')->get();
        $posts = Posts::orderBy('id','desc')->paginate(10);
        return view('posts.index')->with(['posts'=>$posts]);
    }

    //Deberia poder colocarse la palabra Post antes del $postId para ahorrarse el escribir el metodo, pero no me funciono
    public  function show($postId){

        $post = Posts::Find($postId);
        //Capturar el null y qe salga un mensaje bonito en pantalla
        if(is_null($post)){
            abort(404);
        }
        return view('posts.show')->with(['post'=>$post]);
    }

    public  function create(){
        $post = new Posts;
        return view('posts.create')->with(['post'=>$post]);
    }

    //Se creo una clase dedicada a validar los campos del view Create esta clase se llama CreatePostRequest
    public  function store(CreatePostRequest $request){
        //Validaciones dentro del mismo metodo
//        $this->validate($request,[
//            'title' => 'required',
//            'url' => 'required|url'
//        ]);
        session()->flash('message', 'Post Creado');

        $post = new Posts;
        $post->title=$request->get('title');
        $post->description=$request->get('description');
        $post->url=$request->get('url');
        $post->save();
        return redirect()->route('posts_path');
    }

    public  function edit($postId){
        $post = Posts::Find($postId);
        if(is_null($post)){
            abort(404);
        }
        return view('posts.edit')->with(['post'=>$post]);
    }

    public  function update($postId,UpdatePostRequest $request){
        $post = Posts::Find($postId);
        if(is_null($post)){
            abort(404);
        }
        session()->flash('message', 'Post Editado');
        $post->update(
            //Actualizaria rodos los datos del formulario (mala practica)
//            $request->all()
            $request->only('title','description','url')
        );
        return redirect()->route('post_path',['post'=>$post->id]);
    }

    public  function delete($postId){
        $post = Posts::Find($postId);
        if(is_null($post)){
            abort(404);
        }
        session()->flash('message', 'Post Eliminado');
        $post->delete();
        return redirect()->route('posts_path');
    }
}
