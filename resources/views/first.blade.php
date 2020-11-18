<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.main')

@section('title', 'First Page')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection