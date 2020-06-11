@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-8">
      <img src="/storage/{{ $post->image }}" class="w-100">
    </div>
    <div class="col-4">
      <div class="">
        <div class="d-flex align-items-center">
          <div class="pr-3">
            <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px;">
          </div>

          <div>
            <div class="font-weight-bold">
              <a href="/profile/{{ $post->user->id }}" class="text-dark pr-1">{{ $post->user->username }}</a>
              • <a href="#" class="pl-1">Follow</a>
            </div>
          </div>
        </div>

        <hr>

        <p>
          <a href="/profile/{{ $post->user->id }}" class="font-weight-bold text-dark">{{ $post->user->username }}</a> {{ $post->caption }}
        </p>
      </div>
    </div>
  </div>
</div>
@endsection