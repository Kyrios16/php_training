@extends('API.layouts.app')
@section('content')
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
@endsection