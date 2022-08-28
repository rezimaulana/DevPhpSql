@extends('layouts.app')
@section('title', 'Landing')
@section('navigation')
@include('components/navigation')
@endsection
@section('content')
<div class="jumbotron text-center">
    <h1>Student Information</h1>
    <p>Welcome Student!</p>
    <a href="#" class="btn btn-dark">Information</a>
    <a href="#" class="btn btn-primary">Student</a
</div>
@endsection