@extends('template')
@section('main')
    <h1>Hello {{ Auth::user()->name }}</h1>
    <h2>ini halaman user</h2>
@endsection
