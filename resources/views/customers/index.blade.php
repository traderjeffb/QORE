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
                    <th>Contact</th> <!-- Change the column name to "Contact" -->
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
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->company_name }}</td>
                    <td>{{ $customer->phone_number }}</td>
                    <td>
                        @if ($customer->contacts->count() > 1)
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactsModal{{$customer->id}}">
                                Contacts
                            </button>
                        @else
                            {{ $customer->contacts[0]->name }}
                        @endif
                    </td>
                    <td>{{ $customer->contacts[0]->phone }}</td> <!-- Display the phone number of the first contact -->
                    <td>{{ $customer->contacts[0]->department }}</td> <!-- Display the department of the first contact -->
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->city }}</td>
                    <td>{{ $customer->state }}</td>
                    <td>{{ $customer->country }}</td>
                    <td>{{ $customer->zip_code }}</td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="contactsModal{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="contactsModalLabel{{$customer->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="contactsModalLabel{{$customer->id}}">Contacts for {{ $customer->company_name }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Display all contacts for this customer -->
                                @foreach ($customer->contacts as $contact)
                                    <p>Name: {{ $contact->name }}</p>
                                    <p>Phone: {{ $contact->phone }}</p>
                                    <p>Department: {{ $contact->department }}</p>
                                    <!-- Add more contact details as needed -->
                                @endforeach
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection
