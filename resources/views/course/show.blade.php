@extends('layout')

@section('title', $course->name)

@section('content')
    <h1>{{ $course->name }}</h1>

    <div>
        {{-- Display activities --}}
    </div>
@endsection
