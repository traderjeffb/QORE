<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to QORE</title>
</head>
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
</body>
</html>
