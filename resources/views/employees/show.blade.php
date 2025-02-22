@extends('layouts.app')

@section('title', 'Employee Details')

@section('content')
<div class="container">
    <h2 class="text-primary">Employee Details</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <h4>{{ $employee->name }}</h4>
            <p>Email: {{ $employee->email }}</p>
            <p>Phone: {{ $employee->phone }}</p>
            <p>Position: {{ $employee->position }}</p>
            <p>Salary: ${{ number_format($employee->salary, 2) }}</p>

            <h4 class="mt-4">Additional Information</h4>
            @if($employee->details)
                <p>Address: {{ $employee->details->address }}</p>
                <p>Date of Birth: {{ $employee->details->dob }}</p>
                <p>Gender: {{ $employee->details->gender }}</p>
                <p>National ID: {{ $employee->details->national_id }}</p>
            @else
                <p>No additional information available.</p>
                <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addDetailsModal">Add Details</a>
            @endif
        </div>
    </div>
</div>


<div class="modal fade" id="addDetailsModal" tabindex="-1" aria-labelledby="addDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDetailsModalLabel">Add Employee Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('employees.details.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="employee_id" value="{{ $employee->id }}">
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" required>
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="dob" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-control" name="gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Save Details</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
