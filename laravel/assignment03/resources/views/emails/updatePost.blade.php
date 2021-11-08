<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Post Mail</title>
</head>

<body>
  <h3>{{ $postDetails['heading'] }}</h3>
  <ul>
    <li><b>Title</b> :{{ $postDetails['title'] }}</li>
    <li><b>Content</b> :{{ $postDetails['content'] }}</li>
    <li><b>Author name</b> :{{ $postDetails['author'] }}</li>
    <li><b>Email<b> :{{ $postDetails['email'] }}</li>
    <li><b>Upadated at<b> :{{ $postDetails['updated_at'] }}</li>
  </ul>
</body>

</html>