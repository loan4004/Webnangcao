@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Employee</h2>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <input type="text" name="name" class="form-control" placeholder="Name" required>
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        <input type="text" name="phone" class="form-control" placeholder="Phone" required>
        <input type="text" name="position" class="form-control" placeholder="Position" required>
        <input type="number" name="salary" class="form-control" placeholder="Salary" required>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
