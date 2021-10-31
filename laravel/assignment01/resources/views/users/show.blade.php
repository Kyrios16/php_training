@extends('users.layouts.app')
@section('content')

<div class="card">
  <div class="card-header">Users Page</div>
  <div class="card-body">
    <div class="card-body">
      <h5 class="card-title">Name : {{ $user->name }}</h5>
      <p class="card-text">Gender : {{ $user->gender }}</p>
      <p class="card-text">Address : {{ $user->address }}</p>
      <p class="card-text">Email : {{ $user->email }}</p>
    </div>

    </hr>

  </div>
</div>
@endsection