<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment-3</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
    <div class="nav py-3">
      <h1 class="text-4xl inline font-bold text-pink-900 mb-4">My Assignment</h1>
    </div>
    <div class="grid grid-cols-6 gap-4 my-3 p-3 border-solid border-4 border-light-blue-500 rounded">
      <div class="grid col-start-1 col-span-6 ">
        <form action="{{ route('posts.searchDate') }}" method="get" class="grid grid-cols-6">
          <div class="col-start-1 col-end-2 mb-2">
            <label for="text">Start Date</label><br>
            <input type="date" name="startDate" id="startDate" value="{{ old('startDate') }}" class="h-10 bg-white border border-gray-300 rounded py-2 px-2 text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0">
          </div>
          <div class="col-start-3 col-span-2 mb-2">
            <label for="text">End Date</label><br>
            <input type="date" name="endDate" id="endDate" value="{{ old('endDate') }}" class="h-10 bg-white border border-gray-300 rounded py-2 px-2 text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0">
          </div>
          <div class="col-start-5 col-span-1 pt-6">
            <input type="submit" value="Search" class="bg-blue-500 tracking-wide text-white px-2 py-2  mb-6 shadow-lg rounded hover:shadow">
          </div>
        </form>
      </div>
      <div class="col-start-8 col-span-4 pt-4">
        <form action="{{ route('posts.searchColumn') }}" method="GET">
          <div class="search mb-2">
            <input type="search" value="{{ old('search') }}" class="h-10 bg-white border border-gray-300 rounded py-2 px-2 text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0 mt-2" id="search" name="search" placeholder="Search by column name">
            <input type="submit" class="bg-green-500 tracking-wide text-white px-2 py-2  mb-6 shadow-lg rounded hover:shadow" value="Search">
          </div>
        </form>
      </div>
    </div>

    @foreach ($posts as $post)
    <article class="mb-2">
      <div class="grid grid-cols-6 gap-4">
        <div class="col-start-1 col-span-4">
          <p class="text-xl font-bold text-blue-500 mb-5">{{ $post->title }}</p>
        </div>
        <div class="col-start-8 col-end-12">
          <small class="text-md font-bold text-pink-700"><i>By&nbsp;</i>{{ $post->author }}</small>
        </div>
      </div>
      <p class="text-md text-gray-600 my-2">{{ $post->content }}</p>
      <div class="grid grid-cols-6 gap-4 mt-3">
        <div class="col-start-1 col-span-2">
          <a href="{{ route('post.edit',$post->id)}}"><i class="fas fa-edit text-green-600"></i></a> |
          <form action="{{ route('post.destroy',$post->id)}}" method="POST" class="inline">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" onclick="return confirm('Are you sure want to delete?')">
              <i class="fas fa-trash-alt text-md text-red-700"></i>
            </button>
          </form>
        </div>
        <div class="col-start-7 col-span-2">
          <small class="text-md text-green-700">{{ $post->phone }}</small> |
          <small class="text-md text-green-700">{{ $post->email }}</small>
        </div>
      </div>
      <hr class="mt-2">
    </article>
    @endforeach
    <a href="/posts/create" class="bg-green-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Post</a>
    <a href="/users" class="bg-yellow-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">To Users List</a>
  </div>
</body>

</html>