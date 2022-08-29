@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-header">
                <h3>Student Profile</h3>
            </div>
            <div class="card-body">
                <a href="{{ route ('student.index') }}" class="btn btn-warning mb-3">Back</a>
                <div class="row ml-2">
                    <h4 class="col-12">Name : {{ $student->name }}</h4>
                </div>
                <div class="row ml-2">
                    <h4 class="col-12">Student ID : {{ $student->studentId }}</h4>
                </div>
                <div class="row ml-2">
                    <h4 class="col-12">Date of Birth : {{ $student->dob }}</h4>
                </div>
            </div>
        </div>
    </div>
@endsection