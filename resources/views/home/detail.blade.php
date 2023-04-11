@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <div class="container mt-4">
            <div>
                Title: {{ $post->title }}
            </div>
            <div>
                Description: {{ $post->description }}
            </div>
            <div>
                Body: {{ $post->body }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('home.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection