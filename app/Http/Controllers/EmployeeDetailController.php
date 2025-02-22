<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeDetail;
use Illuminate\Http\Request;

class EmployeeDetailController extends Controller
{
    public function show($id)
    {
        $employee = Employee::with('details')->findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'address' => 'nullable|string|max:255',
            'dob' => 'nullable|date',
            'gender' => 'nullable|in:Male,Female,Other',
        ]);

        EmployeeDetail::create([
            'employee_id' => $request->employee_id,
            'address' => $request->address,
            'dob' => $request->dob,
            'gender' => $request->gender,
        ]);

        return redirect()->route('employees.show', $request->employee_id)->with('success', 'Employee details added successfully!');
    }
}
