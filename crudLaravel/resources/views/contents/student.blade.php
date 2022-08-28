@extends('layouts.app')
@section('title', 'Student')
@section('navigation')
@include('components/navigation')
@endsection
@section('content')
<h3>Stundent</h3>
<table class="table table-striped">
    </tr>
        <th>Name</th>
        <th>NIS</th>
        <th>DOB</th>
    </tr>
    <tr>
        <td>Rezi</td>
        <td>10515258</td>
        <td>10-12-96</td>
    </tr>
    <tr>
        <td>Rezi</td>
        <td>10515258</td>
        <td>10-12-96</td>
    </tr>
</table>
@endsection