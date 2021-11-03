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
    <form action="{{ url('/users') }}" method="post">
      @csrf
      <label>Author</label></br>
      <input type="text" name="name" id="name" class="form-control"></br>
      <label>Gender</label></br>
      <input type="text" name="gender" id="gender" class="form-control"></br>
      <label>Address</label></br>
      <input type="text" name="address" id="address" class="form-control"></br>
      <label>Email</label></br>
      <input type="email" name="email" id="email" class="form-control"></br>
      <label>Phone</label></br>
      <input type="text" name="phone" id="phone" class="form-control"></br>
      <label>Password</label></br>
      <input type="password" name="password" id="password" class="form-control"></br>
      <input type="submit" value="Save" class="btn btn-primary"></br>
    </form>

  </div>
</div>

@endsection