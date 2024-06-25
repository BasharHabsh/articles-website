@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to the Article Website</h1>
        <p class="lead">A simple system for managing and displaying articles using Laravel and Blade Layouts.</p>
        <a class="btn btn-primary btn-lg" href="{{ url('/articles') }}" role="button">View Articles</a>
    </div>
@endsection
