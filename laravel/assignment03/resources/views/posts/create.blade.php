<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
  <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
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
    <form method="POST" action="{{url('/posts')}}">
      @csrf

      <div class="mb-4">
        <label class="font-bold text-gray-800" for="title">Title: </label>
        <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title">
      </div>

      <div class="mb-4">
        <label class="font-bold text-gray-800" for="content">Content: </label>
        <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="content"></textarea>
      </div>

      <div class="mb-4">
        <label class="font-bold text-gray-800" for="author">Author: </label>
        <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="author" name="author">
      </div>

      <div class="mb-4">
        <label class="font-bold text-gray-800" for="phone">Phone: </label>
        <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="phone" name="phone">
      </div>

      <div class="mb-4">
        <label class="font-bold text-gray-800" for="email">Email: </label>
        <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="email" name="email">
      </div>

      <button type="submit" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Submit</button>
      <a href="/posts" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
    </form>
  </div>
</body>

</html>