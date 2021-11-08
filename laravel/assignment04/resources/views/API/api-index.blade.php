@extends('API.layouts.app')
@section('content')

<h1 class="display-6 text-center mb-4">Laravel Crud with Ajax</h1>
<a class="btn btn-primary my-4" href="/posts-create" role="button">Create New Post</a>
<table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Author</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
<script src="{{ js/showList.js }}"></script>
@endsection