@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Edit Student</h3>
        </div>
        <div class="card-body">
            <a href="{{ route ('student.index') }}" class="btn btn-primary mb-3">Back</a>
            <form action="{{ route ('student.update', $student->id) }}" method="POST">
                @csrf
                @method("PUT")
                <ul class="list-group">
                    Nama <input type="text" name="name" id="name" required value="{{ $student->name }}">
                    Student ID <input type="text" name="studentId" id="studentId" required value="{{ $student->studentId }}">
                    Date of Birth <input type="date" name="dob" id="dob" required value="{{ $student->dob }}">
                </ul>
                <input type="submit" value="Save" class="btn btn-success mt-4">
            </form>
        </div>
    </div>
</div>
@endsection