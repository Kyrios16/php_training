@extends('app')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

    <form action="{{ url('/users') }}" method="post">
      @csrf
      <label>Name</label></br>
      <input type="text" name="name" id="name" class="form-control"></br>
      <label>Gender</label></br>
      <input type="text" name="gender" id="gender" class="form-control"></br>
      <label>Address</label></br>
      <input type="text" name="address" id="address" class="form-control"></br>
      <label>Email</label></br>
      <input type="email" name="email" id="email" class="form-control"></br>
      <label>Password</label></br>
      <input type="password" name="password" id="password" class="form-control"></br>
      <input type="submit" value="Save" class="btn btn-primary"></br>
    </form>

  </div>
</div>

@endsection