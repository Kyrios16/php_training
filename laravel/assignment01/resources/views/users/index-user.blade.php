@extends('users.layouts.app')

@section('content')
<div class="container">
  <div class="row">

    <div class="col-md-9">
      <div class="card">
        <div class="card-header text-dark">Users</div>
        <div class="card-body">
          <a href="{{ url('/users/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
          </a>
          <a href="{{ route('index') }}" class="btn btn-info btn-sm">
            <i class="far fa-arrow-alt-circle-left"></i> To Posts List
          </a>
          <br>
          <br>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Address</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->gender }}</td>
                  <td>{{ $user->address }}</td>
                  <td>{{ $user->email }}</td>
                  <td>

                    <a href="{{ route('user.edit',$user->id)}}" title="Edit Student"><button class="btn"><i class="fas fa-edit text-warning"></i></button></a>

                    <form method="POST" action="{{ route('user.destroy',$user->id)}}" accept-charset="UTF-8" style="display:inline">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type="submit" class="btn" title="Delete Contact" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt text-danger"></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection