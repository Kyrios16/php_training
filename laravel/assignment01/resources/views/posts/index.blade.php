<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment-1</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <h1 class="text-4xl font-bold mb-4">My Blog</h1>

        <a href="/posts/create" class="bg-green-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Post</a>
        <a href="/users" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">To Users List</a>
        @foreach ($posts as $post)
        <article class="mb-2">
            <p class="text-xl font-bold text-blue-500 mb-5">{{ $post->title }}</p>
            <p class="text-md text-gray-600 my-2">{{ $post->content }}</p>
            <div class="grid grid-cols-6 gap-4">
                <div class="col-start-1 col-end-3">
                    <a href="{{ route('post.edit',$post->id)}}" class="text-green-600">Edit</a>
                    <form action="{{ route('post.destroy',$post->id)}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" class="text-md text-red-700" onclick="return confirm('Are you sure want to delete?')">
                            Delete
                        </button>
                    </form>
                </div>
                <div class="col-end-7 col-span-2">
                    <small class="text-md text-green-700">{{ $post->author }}</small> |
                    <small class="text-md text-green-700">{{ $post->phone }}</small> |
                    <small class="text-md text-green-700">{{ $post->email }}</small>
                </div>
            </div>
            <hr class="mt-2">
        </article>
        @endforeach
    </div>
</body>

</html>