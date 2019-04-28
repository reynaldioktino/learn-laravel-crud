<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Laravel</title>
</head>
<body>
    <h1>Edit Form</h1>
    <form action="/blog/{{ $blogs->id }}" method="post">
        Judul : <input type="text" name="judul" value="{{ $blogs->judul }}"><br>
        Deskripsi : <textarea name="deskripsi" id="" cols="30" rows="3">{{ $blogs->deskripsi }}</textarea>
        
        <input type="submit" name="submit" value="update">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
    </form>
</body>
</html>