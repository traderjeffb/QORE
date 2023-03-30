<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller;
use Illuminate\Http\UploadedFile;
use App\Models\Employee;






class EmployeeController extends Controller
{
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

    //     $validatedData = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|unique:employees,email',
    //         'password' => 'required',
    //         'phone_number' => 'nullable',
    //         'job_title' => 'required',
    //         'department' => 'required',
    //         'profile_image' => 'nullable|image|max:2048'
    //     ]);

    //     // Handle profile image upload
    //     if ($request->hasFile('profile_image')) {
    //         $imagePath = $request->file('profile_image')->store('public/profile_images');
    //         $validatedData['profile_image'] = Storage::url($imagePath);
    //     }

    //     // Create employee
    //     $employee = new Employee();
    //     $employee->name = $validatedData['name'];
    //     $employee->email = $validatedData['email'];
    //     $employee->password = bcrypt($validatedData['password']);
    //     $employee->phone_number = $validatedData['phone_number'];
    //     $employee->job_title = $validatedData['job_title'];
    //     $employee->department = $validatedData['department'];
    //     $employee->profile_image = $validatedData['profile_image'];
    //     $employee->save();

    //     return redirect()->back()->with('success', 'Employee created successfully!');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'phone_number' => 'nullable|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'department' => 'nullable|string|max:255',
            'profile_image' => 'nullable|image|max:2048',
        ]);

        // Create a new user object and set its properties
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->phone_number = $validatedData['phone_number'];
        $user->job_title = $validatedData['job_title'];
        $user->department = $validatedData['department'];

        // Check if a profile image was uploaded and save it to disk
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('profile-images', $file, $filename);
            $user->profile_image = $filename;
        }

        // Save the user to the database
        $user->save();

        // Redirect to the user's profile page
        return redirect()->route('users.show', $user->id);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
