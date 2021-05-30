
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 justify-content-center" style="display: flex">
      </div>
      @foreach($posts as $post)
      <a href="{{route('posts.show', ['slug'=>$post->slug])}}">
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <img src="{{asset('storage/'.$post->cover)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{{ $post->content }}</p>
            </div>
          </div>
        </div>
      </a>
      @endforeach
    </div>
</div>
@endsection
