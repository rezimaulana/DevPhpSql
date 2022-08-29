@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('student.create') }}" class="btn btn-info">Tambah Data Siswa</a>
            <table class="table table-bordered table-striped mt-4">
                <tr>
                    <th>Name</th>
                    <th>Student ID</th>
                    <th>Date of Birth</th>
                    <th>Action</th>
                </tr>
                @foreach($student as $s)
                <tr>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->studentId }}</td>
                    <td>{{ $s->dob }}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{ route ('student.show', $s->id) }}" class="btn btn-success mr-2">Show</a>
                            <a href="{{ route ('student.edit', $s->id) }}" class="btn btn-primary mr-2">Edit</a>
                            <form action="{{ route ('student.destroy', $s->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection