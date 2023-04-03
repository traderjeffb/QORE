
@extends('layouts.app')

@section('content')
    <div class="container w-75">
        <html>
        <body>
            <h1>Welcome to QORE, {{ $employee->name }}!</h1>
            <p>We are thrilled to have you on board. Here are some important details about your employment:</p>
            <ul>
                <li>Employee ID: {{ $employee->id }}</li>
                <li>Email: {{ $employee->email }}</li>
                <li>Phone: {{ $employee->phone }}</li>
                <li>Department: {{ $employee->department }}</li>
                <li>Salary: {{ $employee->salary }}</li>
            </ul>
            <p>If you have any questions or concerns, please don't hesitate to contact your manager or HR representative.</p>
            <p>Thanks for joining the QORE team!</p>
            <form action="{{ route('emails.sendEmail', ['employee' => $employee]) }}" method="post">
                @csrf
                <input type="hidden" name="employee_id" value="{{ $employee->id }}">
                <input type="hidden" name="employee_email" value="{{ $employee->email }}">
                <input type="hidden" name="employee_name" value="{{ $employee->name }}">
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" name="subject" id="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" rows="5" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Email</button>
            </form>
        </body>
        </html>
    </div>
@endsection
