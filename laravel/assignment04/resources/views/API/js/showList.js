$(document).ready(function () {
  $.ajax({
    url: "http://localhost:8000/api/posts-view",
    type: "GET",
    dataType: "json",
    success: function (res) {
      console.log(res)
      res.forEach(posts => {
        $('tbody').append(
          `<tr>
              <td>${posts.id}</td>
              <td>${posts.title}</td>
              <td>${posts.content}</td>
              <td>${posts.author}</td>
              <td>${posts.email}</td>
              <td>${posts.phone}</td>
              <td>
                <a href="/posts-edit"><i class="fas fa-edit text-warning"></i></a>
                <form action="/api/posts/${posts.id}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="submit" onclick="return confirm('Are you sure want to delete?')" class ="btn">
                    <i class="fas fa-trash-alt text-danger"></i>
                  </button>
                </form>
              </tr>`
        )
      })
    }
  })
});

