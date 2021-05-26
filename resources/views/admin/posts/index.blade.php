@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 justify-content-center" style="display: flex">
        <a href="{{route('admin.posts.create')}}">Crea nuovo post</a>
      </div>
      @foreach($posts as $post)
      <div class="col-md-3">
          <div class="card">
              <div class="card-header">{{ $post->title }}</div>
              <div class="card-body">
                <small>{{ $post->content }}</small>
                <a href="{{route('admin.posts.edit', ['post'=> $post->id])}}">Edit</a>
                <form class="delete" action="{{route('admin.posts.destroy', ['post'=>$post->id])}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" name="Delete" value="Delete">
            </form>
              </div>
          </div>
      </div>
      @endforeach
    </div>
</div>
@endsection
