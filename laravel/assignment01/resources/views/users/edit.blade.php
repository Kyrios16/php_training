@extends('users.layouts.app')

@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
    @if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger text-center">
      <strong class="text-red-700 text-opacity-100">Whoops...Something Wrong</strong>
      <br><br>
      <ul>
        @foreach ($errors->all() as $error)
        <li class="text-red-700 text-opacity-100 mb-2">{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{ route('user.update',$user->id)}}" method="post">
      @method('PUT')
      @csrf
      <input type="hidden" name="id" id="id" value="{{$user->id}}" id="id" hidden />
      <label>Name</label></br>
      <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control mb-2">
      <label>Gender</label></br>
      <input type="text" name="gender" id="gender" value="{{$user->gender}}" class="form-control mb-2">
      <label>Address</label></br>
      <input type="text" name="address" id="address" value="{{$user->address}}" class="form-control mb-2">
      <label>Email</label></br>
      <input type="email" name="email" id="email" value="{{$user->email}}" class="form-control mb-2">
      <label>Password</label></br>
      <input type="password" name="password" id="password" value="{{$user->password}}" class="form-control mb-2">
      </br>
      <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
@endsection