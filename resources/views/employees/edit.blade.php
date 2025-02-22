@extends('layouts.app')

@section('title', 'Edit Employee')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4>Edit Employee</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $employee->name }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $employee->email }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ $employee->phone }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Position</label>
                    <input type="text" name="position" class="form-control" value="{{ $employee->position }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Salary</label>
                    <input type="number" name="salary" class="form-control" value="{{ $employee->salary }}" step="0.01" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('employees.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
