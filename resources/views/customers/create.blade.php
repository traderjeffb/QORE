@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Customer Input Form</h1>
    <form action="{{ route('customer.store') }}" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="company_name" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="company_name" name="company_name" required>
            </div>
            <div class="col-md-6">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Street Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>
            <div class="col-md-4">
                <label for="state" class="form-label">State/Province</label>
                <input type="text" class="form-control" id="state" name="state" required>
            </div>
            <div class="col-md-4">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" name="country" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="zip_code" class="form-label">Zip Code</label>
            <input type="text" class="form-control" id="zip_code" name="zip_code" required>
        </div>
        <h3 class="my-3">Contacts</h3>
        <div id="contacts">
        <div class="row" >
            <div class="col-md-4">
                <label for="contact_name" class="form-label">Contact Name</label>
                <input type="text" class="form-control" id="contact_name" name="contacts[0][name]" required>
            </div>
            <div class="col-md-4">
                <label for="contact_phone" class="form-label">Contact Phone Number</label>
                <input type="tel" class="form-control" id="contact_phone" name="contacts[0][phone]" required>
            </div>
            <div class="col-md-4">
                <label for="contact_department" class="form-label">Contact Department</label>
                <input type="text" class="form-control" id="contact_department" name="contacts[0][department]" required>
            </div>


        </div>


            </div>
        <div class="mb-3">
            <button type="button" class="btn btn-primary" id="addContact">Add Contact</button>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<script>
    let contactCounter = 1;
    document.getElementById('addContact').addEventListener('click', function () {
        const contactsDiv = document.getElementById('contacts');
        const contactDiv = document.createElement('div');
        contactDiv.classList.add('row');

        const html = `
            <div class="col-md-4">
                <label for="contact_name_${contactCounter}" class="form-label">Contact Name</label>
                <input type="text" class="form-control" id="contact_name_${contactCounter}" name="contacts[${contactCounter}][name]" required>
            </div>
            <div class="col-md-4">
                <label for="contact_phone_${contactCounter}" class="form-label">Contact Phone Number</label>
                <input type="tel" class="form-control" id="contact_phone_${contactCounter}" name="contacts[${contactCounter}][phone]" required>
            </div>
            <div class="col-md-4">
                <label for="contact_department_${contactCounter}" class="form-label">Contact Department</label>
                <input type="text" class="form-control" id="contact_department_${contactCounter}" name="contacts[${contactCounter}][department]" required>
            </div>
        `;

        contactDiv.innerHTML = html;
        contactsDiv.appendChild(contactDiv);
        contactCounter++;
    });
</script>
@endsection
