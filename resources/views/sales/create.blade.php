@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Customer Input Form</h1>
    <form action="{{ route('save_customer') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="company_name" class="form-label">Company Name</label>
            <input type="text" class="form-control" id="company_name" name="company_name" required>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="address" class="form-label">Street Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="state" class="form-label">State/Province</label>
                    <input type="text" class="form-control" id="state" name="state" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" class="form-control" id="country" name="country" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="zip_code" class="form-label">Zip Code</label>
                    <input type="text" class="form-control" id="zip_code" name="zip_code" required>
                </div>
            </div>
        </div>
        <h3 class="my-3">Contacts</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="contact_name" class="form-label">Contact Name</label>
                    <input type="text" class="form-control" id="contact_name" name="contacts[0][name]" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="contact_phone" class="form-label">Contact Phone Number</label>
                    <input type="tel" class="form-control" id="contact_phone" name="contacts[0][phone]" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="contact_department" class="form-label">Contact Department</label>
                    <input type="text" class="form-control" id="contact_department" name="contacts[0][department]" required>
                </div>
            </div>
        </div>
        <!-- Add more contacts dynamically using JavaScript if needed -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
