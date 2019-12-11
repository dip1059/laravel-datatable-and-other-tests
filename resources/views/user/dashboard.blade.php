@extends('layouts.master')
@section('contents')
    User Dashboard
    {{Auth::user()->name}}
@endsection
