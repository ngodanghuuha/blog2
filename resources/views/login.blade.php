@extends('layouts.app-master')

@section('content')
    <h1>Admin Login</h1>
    <form action="{{route('postAdminLogin')}}" method="post">
        {{ csrf_field() }}
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        @foreach ($errors->all() as $error)
            <p class="text-danger">{{ $error}}</p>
        @endforeach
        <button type="submit">Login</button>
    </form>
@endsection
<style>
    body {
        font-family: Arial, sans-serif;
    }
    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px 60px 20px 50px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0px 0px 5px #ccc;
    }
    h1 {
        text-align: center;
    }
    label {
        display: block;
        margin-bottom: 10px;
    }
    input[type="email"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    button:hover {
        background-color: #3e8e41;
    }
    .text-danger {

    }
</style>