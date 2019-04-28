<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Laravel</title>
</head>
<body>
    <h1>Tambah Form</h1>
    <!-- @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif -->

    <form action="/blog" method="POST">
        Judul : <input type="text" name="judul" value="{{ old('judul') }}"><br>
        @if($errors->has('judul'))
            <p>{{ $errors->first('judul') }}</p>
        @endif
        Deskripsi : <textarea name="deskripsi" id="" cols="30" rows="3">{{ old('deskripsi') }}</textarea>
        @if($errors->has('judul'))
            <p>{{ $errors->first('deskripsi') }}</p>
        @endif
        
        <input type="submit" name="submit" value="tambah">
        {{ csrf_field() }}
    </form>
</body>
</html>