@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">All Customers</h1>

    @if (count($customers) > 0)
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Company Name</th>
                    <th>Company Number</th>
                    <th>Contact Name</th>
                    <th>Contact Phone</th>
                    <th>Department</th>
                    <th>Street Address</th>
                    <th>City</th>
                    <th>State/Province</th>
                    <th>Country</th>
                    <th>Zip Code</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                @if ($customer->contacts->isEmpty())
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->company_name }}</td>
                    <td>{{ $customer->phone_number }}</td>
                    <td colspan="3">No contacts available</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->city }}</td>
                    <td>{{ $customer->state }}</td>
                    <td>{{ $customer->country }}</td>
                    <td>{{ $customer->zip_code }}</td>
                </tr>
                @else
                @foreach ($customer->contacts as $contact)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->company_name }}</td>
                    <td>{{ $customer->phone_number }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->department }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->city }}</td>
                    <td>{{ $customer->state }}</td>
                    <td>{{ $customer->country }}</td>
                    <td>{{ $customer->zip_code }}</td>
                </tr>
                @endforeach
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="alert alert-info">No customers found.</div>
    @endif
</div>
@endsection
