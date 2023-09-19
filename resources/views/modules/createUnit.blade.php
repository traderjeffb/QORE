@extends('layouts.app')

@section('content')
<div class="container-lg mt-4">
    <h1 class="mb-4 text-center">Assemble a Unit</h1>
    <form id="unitForm" class="shadow p-3 mb-5 bg-white rounded mx-auto" action="../modules.saveUnit" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="module-fields">
            <!-- Initial module selection fields go here -->
            <div class="row module-row">
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="categoryDropdown" class="form-label">Select a Category:</label>
                        <select class="form-select category-select" name="category">
                            @foreach($categories as $category)
                                <option value="{{ $category->category }}">{{ $category->category }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <div class="mb-3"> <!-- Wrap both label and dropdown in this div -->
                            <label for="moduleDropdown" class="form-label">Select Module:</label>
                            <select class="form-select module-select" name="module">
                                <!-- Dropdown options will be populated based on the selected category -->
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label class="form-label" for="quantity">Quantity:</label>
                        <input type="text" name="quantity" class="form-control">
                    </div>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger remove-module-btn">Remove</button>
                </div>
            </div>
        </div>
        <div class="mb-3 mt-3 text-center">
            <button type="button" class="btn btn-primary" id="addModuleBtn">Add Another Module</button>
            <button type="submit" class="btn btn-success">Save Unit</button>
        </div>
    </form>
</div>

<!-- Add Bootstrap and jQuery scripts here -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // JavaScript logic to handle category selection change
    $('.category-select').on('change', function() {
        const selectedCategory = $(this).val();
        const moduleSelect = $(this).closest('.module-row').find('.module-select');

        // Make an AJAX call to fetch modules for the selected category
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'getModulesByCategory',
            method: 'GET',
            data: { category: selectedCategory },
            success: function(data) {
                // Clear existing dropdown options
                moduleSelect.empty();

                // Populate the dropdown with new options
                $.each(data, function(id, name) {
                    moduleSelect.append($('<option>', {
                        value: id,
                        text: name
                    }));
                });
            },
            error: function(xhr, status, error) {
                // Handle errors if needed
            }
        });
    });

    // JavaScript logic to add more module selection fields when the "Add Module" button is clicked
    $('#addModuleBtn').on('click', function() {
        const moduleField = `
            <div class="row module-row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="categoryDropdown" class="form-label">Select a Category:</label>
                        <select class="form-select category-select" name="category">
                            @foreach($categories as $category)
                                <option value="{{ $category->category }}">{{ $category->category }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="moduleDropdown" class="form-label">Select Module:</label>
                        <select class="form-select module-select" name="module">
                            <!-- Dropdown options will be populated based on the selected category -->
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity:</label>
                        <input type="text" name="quantity" class="form-control">
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger remove-module-btn">Remove</button>
                </div>
            </div>
        `;

        // Append the new module field to the form
        $('.module-fields:last').append(moduleField);
    });

    // JavaScript logic to remove module selection fields when the "Remove" button is clicked
    $(document).on('click', '.remove-module-btn', function() {
        $(this).closest('.module-row').remove();
    });
</script>
@endsection
