<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller;
use Illuminate\Http\UploadedFile;
use App\Models\Employee;
use App\Events\NewEmployeeEvent;
use Illuminate\Support\Facades\Event;


class EmployeeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $employees = Employee::all();
        // dd($employees);
        return view('employees.index', compact('employees'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    return view('employees.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'nullable|string|min:6',
            'phone_number' => 'nullable|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'department' => 'nullable|string|max:255',
            'profile_image' => 'nullable|image|max:2048',
        ]);
        // dd($validatedData);
        // Create a new user object and set its properties
        $employees = new Employee();
        $employees->name = $validatedData['name'];
        $employees->email = $validatedData['email'];
        $employees->password = Hash::make($validatedData['password']);
        $employees->phone_number = $validatedData['phone_number'];
        $employees->job_title = $validatedData['job_title'];
        $employees->department = $validatedData['department'];

        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/profile-images', $filename);
            $employees->profile_image = $filename;
        } else {
            $employees->profile_image = 'defaultImage.jpg'; // Set to the filename of your default image
        }



        // Save the user to the database
        $employees->save();
        $employee = Employee::latest()->first();
        $id = $employee->id;

        event(new NewEmployeeEvent($employee));
        // Redirect to the user's profile page
        // return redirect()->route('Mail.welcomeNewEmployee', $employee);
        return view('emails.welcomeNewEmployee', ['employee' => $employee]);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone_number = $request->input('phone_number');
        $employee->job_title = $request->input('job_title');
        $employee->department = $request->input('department');

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = storage_path('app/public/profile-images/' . $filename);
            Image::make($image)->resize(200, 200)->save($path);
            $employee->profile_image = $filename;
        }

        $employee->save();

        return redirect()->route('employees.show', $employee->id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees')->with('success', 'Employee record deleted successfully.');
    }



}
