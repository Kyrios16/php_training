@extends('API.layouts.app')
@section('content')

<h2 class="display-6 text-dark mb-4">Create Post</h2>
<form action="/posts-view" method="post">
  @csrf
  <input type="text" id="title" name="title" placeholder="Title" class="form-control mb-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <input type="text" id="content" name="content" placeholder="Content" class="form-control mb-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <input type="text" id="author" name="author" placeholder="Author" class="form-control mb-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <input type="text" id="phone" name="phone" placeholder="Phone" class="form-control mb-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <input type="text" id="email" name="email" placeholder="Email" class="form-control mb-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <input type="submit" class="btn btn-primary" value="Submit">

</form>
@endsection