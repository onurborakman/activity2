@extends('layouts.appmaster')
@section('title', 'Login Page')
@section('content')
<h1>Login</h1>
<form action="dologin" method="post">
    @csrf
    <input type="text" name="username">
    <input type="password" name="password">
    <button type="submit">Submit</button>
</form>
@endsection

