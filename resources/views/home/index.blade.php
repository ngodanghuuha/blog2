@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        <h1>Homepage Blogs</h1>
    </div>
    <div class="container">
        @foreach ($posts as $key => $post)
            <ul>
                <li>
                    <a href="/detail/{{ $post->id }}">{{ $post->title }}</a>
                </li>
            </ul>
         @endforeach
    </div>
@endsection