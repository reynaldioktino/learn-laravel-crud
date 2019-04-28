<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Laravel</title>
</head>
<body>
    <h1>Halo Halo</h1>
    <H5>{{ $blog }}</H5>
    @foreach($users as $user)
        <li>{{ $user->username }}{{ $user->password }}</li>
    @endforeach
</body>
</html>