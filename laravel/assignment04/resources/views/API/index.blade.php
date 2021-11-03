@extends('API.layouts.app')
@section('content')
<div class="row">
  <div class="col">
    <h1 class="display-5 mb-3 text-center">ASSIGNMENT CRUD JQUERY AJAX </h1>
    <a class="btn btn-success mb-3" href="/api-view/post/create">New Post Create</a>
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
  </div>
</div>
</div>

<script>
  // show post list
  $.ajax({
    url: "/api/view-list",
    type: "GET",
    dataType: "json",
    success: function(res) {

      res.forEach(posts => {
        $("tbody").append(
          `<tr class="text-center">
              <td>${posts.id}</td>
              <td>${posts.title}</td>
              <td>${posts.content}</td>
              <td>${posts.author}</td>
              <td>${posts.email}</td>
              <td>${posts.phone}</td>
              <td>
                <a href="/api-view/post/${posts.id}/edit" class="btn btn-warning">Edit</a>
                <button class="btn btn-danger" onClick="destroy(${posts.id})">Delete</button>
              </tr>`
        );
      });
    },
  });

  // To delete post
  function destroy(id) {
    alert(id);

    $.ajax({
      url: `/api/post/delete/${id}`,
      type: 'DELETE',
      success: function(result) {
        alert("Post Deleted Successfull");
        location.reload();
      },
      error: function(result) {
        alert("Post Deleted Fail");
      }
    });
  }
</script>
@endsection