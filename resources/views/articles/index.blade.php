@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Articles</h1>
    @if($articles->isEmpty())
        <p>No articles found.</p>
    @else
        <div class="list-group">
            @foreach ($articles as $article)
                <a href="{{ route('articles.show', $article->id) }}" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">{{ $article->title }}</h5>
                    <small>Published on {{ $article->created_at->format('d M Y') }} in {{ $article->category->name }}</small>
                </a>
            @endforeach
        </div>
    @endif
@endsection
