@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="col-md-8 justify-content-center" style="display: flex">
          <a href="{{route('admin.posts.index')}}">Your posts</a>
        </div>
        <div class="col-md-8">
          <h2>Invia email</h2>
          <form class="crea" action="{{route('admin.contact')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
              <input type="text" class="form-control @error('autore') is-invalid @enderror" id="title" name="autore" placeholder="{{ Auth::user()->email }}" value="{{ Auth::user()->email }}" disabled>
              @error('autore')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Destinatario Email</label>
              <input type="text" class="form-control @error('email_dest') is-invalid @enderror" id="title" name="email_dest">
              @error('title')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Oggetto</label>
              <input type="text" class="form-control @error('object') is-invalid @enderror" id="title" name="object">
              @error('object')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Messaggio</label>
              <textarea class="form-control @error('content_message') is-invalid @enderror" name="content_message" id="exampleFormControlTextarea1"></textarea>
              @error('content_message')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <button type="submit" name="button">Invia</button>
          </form>
        </div>
      </div>
  </div>
@endsection
