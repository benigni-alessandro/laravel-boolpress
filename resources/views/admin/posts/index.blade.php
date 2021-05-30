@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 justify-content-center" style="display: flex">
        <a href="{{route('admin.posts.create')}}">Crea nuovo post</a>
        <a href="{{route('admin.categories.create')}}">Crea una categoria</a>
      </div>
      @foreach($posts as $post)
      <a href="{{route('admin.posts.show', ['post'=>$post->id])}}">
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <img src="{{asset('storage/'.$post->cover)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{{ $post->content }}</p>
              <div class="controls" style="display: flex; justify-content: space-between; align-items: center;">
                <a href="{{route('admin.posts.edit', ['post'=> $post->id])}}">Edit</a>
                <form class="delete" action="{{route('admin.posts.destroy', ['post'=>$post->id])}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" name="Delete" value="Delete">
                </form>
              </div>
            </div>
          </div>
        </div>
      </a>
      @endforeach
    </div>
</div>
@endsection
