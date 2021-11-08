<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User Mail</title>
</head>

<body>
  <h3>{{ $userDetails['heading'] }}</h3>
  <ul>
    <li><b>Username</b> :{{ $userDetails['name'] }}</li>
    <li><b>Gender</b> :{{ $userDetails['gender'] }}</li>
    <li><b>Address</b> :{{ $userDetails['address'] }}</li>
    <li><b>Phone</b> :{{ $userDetails['phone'] }}</li>
    <li><b>Email<b> :{{ $userDetails['email'] }}</li>
  </ul>
</body>

</html>