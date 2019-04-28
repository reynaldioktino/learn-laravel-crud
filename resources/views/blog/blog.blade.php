@extends('layouts.master')

@section('title')
    Blog
@endsection

@section('content')
    <h3>Selamat Datang Di  Blog Kami</h3>
    <a href="/blog/tambah">Tambah Data</a><br><br>
    @foreach($blogs as $blog)
        <a href="/blog/{{ $blog->id }}">{{ $blog->judul }}</a> || <a href="/blog/edit/{{ $blog->id }}">Edit</a> || <form action="/blog/{{ $blog->id }}" method="POST"><input type="submit" name="submit" value="hapus">{{ csrf_field() }}<input type="hidden" name="_method" value="DELETE"></form><br>
    @endforeach
@endsection