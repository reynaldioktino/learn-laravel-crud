@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <h3>Selamat Datang Di  Web Kami</h3>
    @foreach($users as $user)
        {{ $user->username }}<br>
        {{ $user->password }}<br><br>
    @endforeach
@endsection