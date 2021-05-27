@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 justify-content-center" style="display: flex">
        <h4>Nuovo post</h4>
      </div>
      <div class="col-md-8 justify-content-center">
        @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
      </div>
      <div class="col-md-8">
        <form class="crea" action="{{route('admin.posts.update', ['post' => $post->id])}}" method="post">
          @csrf
          @method('PATCH')
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title" value="{{ old('title', $post->title) }}">
            @error('title')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="exampleFormControlTextarea1">{{old('content', $post->content)}}</textarea>
            @error('content')
            <small>{{$message}}</small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Category</label>
            <select type="text" class="form-control @error('category') is-invalid @enderror" id="title" name="category_id">
              <option value="">Select</option>
              @foreach($categories as $category)
                <option value="{{$category->id}}" {{$category->id == old('category_id', $post->category_id) ? 'selected' : ''}}>{{$category->name}}</option>
              @endforeach
            </select>
            @error('title')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <button type="submit" name="button">Save</button>
        </form>
      </div>
    </div>
</div>
@endsection
