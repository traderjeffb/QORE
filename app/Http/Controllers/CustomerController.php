<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Controllers\ContactsController;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $customers = Customer::all();
        $customers = Customer::with('contacts')->get();
        // dd($employees);
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         $request->validate([
             'company_name' => 'required|string|max:255',
             'phone_number' => 'required|string|max:20',
             'address' => 'required|string|max:255',
             'city' => 'required|string|max:255',
             'state' => 'required|string|max:255',
             'country' => 'required|string|max:255',
             'zip_code' => 'required|string|max:10',
         ]);

         $customer = new Customer([
             'company_name' => $request->company_name,
             'phone_number' => $request->phone_number,
             'address' => $request->address,
             'city' => $request->city,
             'state' => $request->state,
             'country' => $request->country,
             'zip_code' => $request->zip_code,
         ]);
// dd($customer);
         $customer->save();
         $latestCustomer = Customer::latest()->first();
         $customer_id = $latestCustomer->id;

         foreach ($request->contacts as $contact) {
            $contactsController = new ContactsController();
            $contactsController->store(new Request($contact), $customer->id);
        }

        return redirect()->route('customer.index')->with('success', 'Customer added successfully!');
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
