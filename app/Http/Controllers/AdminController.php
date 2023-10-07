<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Database\Eloquent\Model;
use App\Models\Benefit;
use App\Models\Employee;
use App\Http\Controllers\EmployeeController;

class AdminController extends Controller
{
    public function hr()
    {
        return view('admin.hr');
    }

    public function benefits()
        {
            // Retrieve a list of employee names
            $employeeNames = Employee::pluck('name', 'id');

            return view('admin.benefits', compact('employeeNames'));
        }



    public function storeBenefits(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'employee_id' => 'required|integer', // You may need to adjust the validation rules
            'compensation' => 'required|string', // Adjust as needed
            'attendance' => 'required|string',
            'performance_reviews' => 'required|string',
            // Add validation rules for other benefit fields as needed
        ]);

        // Create a new Benefit model instance and populate it with the validated data
        $benefit = new Benefit();
        $benefit->employee_id = $validatedData['employee_id'];
        $benefit->compensation = $validatedData['compensation'];
        $benefit->attendance = $validatedData['attendance_points'];
        $benefit->performance_reviews = $validatedData['performance_reviews'];
        // Set other benefit fields here based on your form input names

        // Save the benefit record to the database
        $benefit->save();

        // Redirect back with a success message (you can customize this)
        return redirect()->route('benefits.index')->with('success', 'Benefit added successfully');
    }
}
