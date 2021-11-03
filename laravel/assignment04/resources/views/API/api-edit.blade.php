@extends('API.layouts.app')
@section('content')
<div id="createForm">
    <h4 class="text-dark mb-4">Edit Post</h4>
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

    <button class="btn btn-success" id="btnEdit" onclick="editPost()">Edit</button>
</div>

<script>
    var postId = window.location.pathname.split('/')[3];
    $.ajax({
        url: "/api/posts/edit/" + postId,
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            $('#title').val(res.title);
            $('#content').val(res.content);
            $('#author').val(res.author);
            $('#email').val(res.email);
            $('#phone').val(res.phone);

        }
    });

    function editPost() {
        var editedData = {
            title: $('#title').val(),
            content: $('#content').val(),
            author: $('#author').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
        }

        $.ajax({
            url: "/api/posts/" + postId,
            type: 'POST',
            data: editedData,
            dataType: 'json', // added data type
            success: function(res) {
                window.location.replace("/api-view");
            }
        });
    }
</script>
@endsection