@extends('template')
@section('main')
    <h1>Welcome Screen!!</h1>

    @for ($i = 0; $i < 10; $i++)
        @if ($i % 2 == 0)
            {{-- <h1>ini perulangan dengan blade ke {{ $i }}</h1> --}}
            <img src="{{ asset('image/laravel.png') }}" alt="" width="250">
        @endif
    @endfor
@endsection
