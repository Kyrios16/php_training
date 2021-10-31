@extends('app')

@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

    <form action="{{ route('user.update',$user->id)}}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")
      <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" hidden />
      <label>Name</label></br>
      <input type="text" name="name" id="name" value="{{$contacts->name}}" class="form-control"></br>
      <label>Gender</label></br>
      <input type="text" name="gender" id="gender" value="{{$contacts->gender}}" class="form-control"></br>
      <label>Address</label></br>
      <input type="text" name="address" id="address" value="{{$contacts->address}}" class="form-control">
      <label>Password</label></br>
      <input type="password" name="password" id="password" value="{{$contacts->password}}" class="form-control">
      </br>
      <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
@endsection