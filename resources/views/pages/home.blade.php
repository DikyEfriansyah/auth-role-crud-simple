@extends('template')

@section('title')
    <title>Welcome To Home</title>
@endsection

@section('title-content')
    <h3>Selamat datang kembali, {{auth()->user()->name}}</h3>
    <br>
    <p>Menu sebelah kiri untuk melihat project</p>
    <p>untuk logout klik nama di pojok kanan atas lalu tekan logout</p>
@endsection