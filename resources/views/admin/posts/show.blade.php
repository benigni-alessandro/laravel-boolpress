@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 justify-content-center" style="display: flex">
        <a href="{{route('admin.posts.index')}}">Torna indietro</a>
      </div>
      <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <img src="{{asset('storage/'.$post->cover)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{{ $post->content }}</p>
              @foreach($post->tags as $tag )
              <p class="card-text"><a href="{{route('tag.index', ['slug'=>$tag->slug])}}">#{{ $tag->name }}</a></p>
              @endforeach
              <p class="card-text">Category: @if($post->category)
              {{ $post->category->name }}
              @endif</p>
            </div>
          </div>
      </div>
    </div>
</div>
@endsection
