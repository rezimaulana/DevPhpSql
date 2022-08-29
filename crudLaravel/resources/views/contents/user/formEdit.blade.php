@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Edit User</h3>
        </div>
        <div class="card-body">
            <a href="{{ route ('user.index') }}" class="btn btn-primary mb-3">Back</a>
            <form action="{{ route ('user.update', $user->id) }}" method="POST">
                @csrf
                @method("PUT")
                <ul class="list-group">
                    Name <input type="text" name="name" id="name" required value="{{ $user->name }}">
                     Role <select name="role" id="role" required>
                        <option value="{{ $user->role }}">{{ $user->role }}</option>
                        @if ($user->role === 'student')
                            <option value="admin">admin</option>
                        @else
                            <option value="student">student</option>
                        @endif
                    </select>
                    Email <input type="email" name="email" id="email" required value="{{ $user->email }}">
                </ul>
                <input type="submit" value="Save" class="btn btn-success mt-4">
            </form>
        </div>
    </div>
</div>
@endsection