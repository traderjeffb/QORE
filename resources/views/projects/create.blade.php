@extends('layouts.app')

@section('content')
<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
  </ul>
<div class="container">
    <h1 class="mb-4">Project Initiation Estimate</h1>
    <form action="{{ route('projects.store') }}" method="post">
        @csrf

        <div class="mb-1">
            <label class="form-label font-weight-bold">Design and Fabrication:</label>
            <div class="d-flex justify-content-between">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="hours" id="hours_2" value="2">
                    <label class="form-check-label" for="hours_2">2 hours</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="hours" id="hours_4" value="4">
                    <label class="form-check-label" for="hours_4">4 hours</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="hours" id="hours_6" value="6">
                    <label class="form-check-label" for="hours_6">6 hours</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="hours" id="hours_8" value="8">
                    <label class="form-check-label" for="hours_8">8 hours</label>
                </div>
                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input me-2" type="radio" name="hours" id="hours_custom" value="custom">
                    <label class="form-check-label me-2" for="hours_custom">Custom:</label>
                    <input class="form-control" type="number" name="custom_hours" id="custom_hours" min="1" max="999" style="width: 70px;">
                </div>
                <select class="form-select ms-2" name="employee_design_fabrication" id="employee_design_fabrication">
                    <option value="">Select Employee</option>
                    <!-- Loop to populate dropdown with employee names -->
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-1">
            <label class="form-label font-weight-bold">Legistical Planning:</label>
            <div class="d-flex justify-content-between">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="hours" id="hours_2" value="2">
                    <label class="form-check-label" for="hours_2">2 hours</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="hours" id="hours_4" value="4">
                    <label class="form-check-label" for="hours_4">4 hours</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="hours" id="hours_6" value="6">
                    <label class="form-check-label" for="hours_6">6 hours</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="hours" id="hours_8" value="8">
                    <label class="form-check-label" for="hours_8">8 hours</label>
                </div>
                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input me-2" type="radio" name="hours" id="hours_custom" value="custom">
                    <label class="form-check-label me-2" for="hours_custom">Custom:</label>
                    <input class="form-control" type="number" name="custom_hours" id="custom_hours" min="1" max="999" style="width: 70px;">
                </div>
                <select class="form-select ms-2" name="employee_design_fabrication" id="employee_design_fabrication">
                    <option value="">Select Employee</option>
                    <!-- Loop to populate dropdown with employee names -->
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-1">
            <label class="form-label font-weight-bold">Design and Fabrication:</label>
            <div class="d-flex justify-content-between">

                <div class="form-check d-flex align-items-center mb-3">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="hours" id="Design_and_Fabrication" value="2">
                        <label class="form-check-label" for="Design_and_Fabrication">Design and Fabrication</label>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <label for="name" class="form-label me-2">Name:</label>
                        </div>
                        <div class="col">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
                        </div>
                    </div>
                </div>


                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input me-2" type="radio" name="hours" id="hours_custom" value="custom">
                    <label class="form-check-label me-2" for="hours_custom">Custom:</label>
                    <input class="form-control" type="number" name="custom_hours" id="custom_hours" min="1" max="999" style="width: 70px;">
                </div>

                <select class="form-select ms-2" name="employee_design_fabrication" id="employee_design_fabrication">
                    <option value="">Select Employee</option>
                    <!-- Loop to populate dropdown with employee names -->
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

<script>
    // Add event listener to radio buttons for Design and Fabrication
    const radioButtonsDesignFabrication = document.querySelectorAll('input[type="radio"][name="hours"]');
    const employeeNameContainer = document.getElementById('employeeNameContainer');

    radioButtonsDesignFabrication.forEach(radioButton => {
        radioButton.addEventListener('change', () => {
            // Fetch the selected radio button value
            const selectedValue = document.querySelector('input[name="hours"]:checked').value;

            // Display the corresponding employee name below the radio buttons
            employeeNameContainer.innerHTML = '';
            if (selectedValue === 'custom') {
                employeeNameContainer.innerHTML = `
                    <div class="form-group mb-3">
                        <label class="form-label" for="employee_custom_name">Employee Name:</label>
                        <input class="form-control" type="text" name="employee_custom_name" id="employee_custom_name" maxlength="100">
                    </div>
                `;
            } else {
                // Fetch the employee name based on the selected radio button value
                const employeeName = fetchEmployeeName(selectedValue); // Implement this function to fetch the name from the server or elsewhere
                employeeNameContainer.innerHTML = `
                    <p class="form-label mb-0">Employee Name: ${employeeName}</p>
                `;
            }
        });
    });

    // Add event listener to radio buttons for Legistical Planning
    const radioButtonsLegisticalPlanning = document.querySelectorAll('input[type="radio"][name="hours_legistical_planning"]');
    const employeeNameContainer2 = document.getElementById('employeeNameContainer2');

    radioButtonsLegisticalPlanning.forEach(radioButton => {
        radioButton.addEventListener('change', () => {
            // Fetch the selected radio button value
            const selectedValue = document.querySelector('input[name="hours_legistical_planning"]:checked').value;

            // Display the corresponding employee name below the radio buttons
            employeeNameContainer2.innerHTML = '';
            if (selectedValue === 'custom') {
                employeeNameContainer2.innerHTML = `
                    <div class="form-group mb-3">
                        <label class="form-label" for="employee_custom_name_legistical_planning">Employee Name:</label>
                        <input class="form-control" type="text" name="employee_custom_name_legistical_planning" id="employee_custom_name_legistical_planning" maxlength="100">
                    </div>
                `;
            } else {
                // Fetch the employee name based on the selected radio button value
                const employeeName = fetchEmployeeNameLegisticalPlanning(selectedValue); // Implement this function to fetch the name from the server or elsewhere
                employeeNameContainer2.innerHTML = `
                    <p class="form-label mb-0">Employee Name: ${employeeName}</p>
                `;
            }
        });
    });

    // Add your fetchEmployeeName and fetchEmployeeNameLegisticalPlanning functions here
</script>

