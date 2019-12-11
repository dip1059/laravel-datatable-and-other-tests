@extends('layouts.master')
@section('contents')
    <form action="{{ route('login.post') }}" method="post">
        @csrf
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit">
    </form>
@endsection
