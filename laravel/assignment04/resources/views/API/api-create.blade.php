@extends('API.layouts.app')
@section('content')
<<<<<<< HEAD

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
=======
<div id="createForm">
  <h4 class="text-dark mb-4">Create Post</h4>
  <div class="mb-2 form-group">
    <label class="text-dark" for="title">Title: </label>
    <input class="form-control" id="title" name="title">
  </div>

  <div class="mb-2 form-group">
    <label class="text-dark" for="content">Content: </label>
    <textarea class="form-control" id="content" name="content"></textarea>
  </div>

  <div class="mb-2 form-group">
    <label class="text-dark" for="author">Author: </label>
    <input class="form-control" id="author" name="author">
  </div>

  <div class="mb-2 form-group">
    <label class="text-dark" for="email">Email: </label>
    <input class="form-control" id="email" name="email">
  </div>

  <div class="mb-2 form-group">
    <label class="text-dark" for="phone">Phone: </label>
    <input class="form-control" id="phone" name="phone">
  </div>

  <button class="btn btn-success" id="btnCreate" onclick="createPost()">Create</button>
</div>

<script>
  function createPost() {
    var createdData = {
      title: $('#title').val(),
      content: $('#content').val(),
      author: $('#author').val(),
      email: $('#email').val(),
      phone: $('#phone').val(),
    }
    console.log(createdData);
    $.ajax({
      url: "/api/posts",
      type: 'POST',
      data: createdData,
      dataType: 'json', // added data type
      success: function(res) {
        window.location.replace("/api-view");
      }
    });
  }
</script>
>>>>>>> 3054fbd3c5abb91662eb6d86dccb74f1ff79fceb
@endsection