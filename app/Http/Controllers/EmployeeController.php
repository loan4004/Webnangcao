<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\EmployeeDetail;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees',
            'phone' => 'required',
            'position' => 'required',
            'salary' => 'required|numeric',
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee added successfully');
    }

    public function edit($id)
{
    $employee = Employee::findOrFail($id);
    return view('employees.edit', compact('employee'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:15',
        'position' => 'required|string|max:255',
        'salary' => 'required|numeric|min:0',
    ]);

    $employee = Employee::findOrFail($id);
    $employee->update($request->all());

    return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
}


    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully');
    }
    public function show($id)
        {
            $employee = Employee::find($id); 
            $employeeDetails = EmployeeDetail::where('employee_id', $id)->first();

            if (!$employeeDetails) {
                return abort(404, 'Employee details not found.');
            }

            return view('employees.show', compact('employee', 'employeeDetails'));
        }


}
