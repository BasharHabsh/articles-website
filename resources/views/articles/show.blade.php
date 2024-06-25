@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $article->title }}</h1>
        <p class="text-muted">Published on {{ $article->created_at->format('d M Y') }} in {{ $article->category->name }}</p>
        <div>
            {{ $article->content }}
        </div>
        <a href="{{ url('/articles') }}" class="btn btn-primary mt-3">Back to Articles</a>
    </div>
@endsection
