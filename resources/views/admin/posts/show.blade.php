@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 justify-content-center" style="display: flex">
      </div>
      <div class="col-md-3">
          <div class="card">
              <div class="card-header">{{ $post->title }}</div>
              <div class="card-body">
                <p>{{ $post->content }}</p>
                <p>Category: @if($post->category)
                {{ $post->category->name }}
                @endif
                </p>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
