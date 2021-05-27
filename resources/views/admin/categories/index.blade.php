@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 justify-content-center" style="display: flex">
        <a href="{{route('admin.categories.create')}}">Crea nuova category</a>
      </div>
      @foreach($categories as $category)
      <a href="{{route('admin.categories.show', ['category'=>$category->id])}}">
        <div class="col-md-3">
          <div class="card">
              <div class="card-header">{{ $category->name }}</div>
                <div class="card-body">
                  <div class="controls" style="display: flex; justify-content: space-between; align-items: center;">
                    <a href="{{route('admin.categories.edit', ['category'=> $category->id])}}">Edit</a>
                    <form class="delete" action="{{route('admin.categories.destroy', ['category'=>$category->id])}}" method="post">
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
