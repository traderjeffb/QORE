@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-center">Assemble a Unit</h1>

        <!-- Display buttons for each category -->
        <div class="mb-3">
            <p class="fs-5">Begin by Selecting a Category</p>
            @foreach($categories as $category)
                <button type="button" class="btn btn-primary active category-btn" data-category="{{ $category->category }}">
                    {{ $category->category }}
                </button>
            @endforeach
        </div>

        <form id="unitForm" class="shadow p-3 mb-5 bg-white rounded mx-auto">
            <!-- Module selection fields -->
            <div class="module-fields">
                <div class="row">
                    <div class="col-md-1">
                        <div class="mb-3">
                            <label for="quantity">Quantity</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="mb-3">
                            <input type="text" name="quantity" id="quantity" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="mb-3">
                            <label for="moduleDropdown">Select Module:</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <select class="form-select" id="moduleDropdown" name="module">
                                <!-- Dropdown options will be populated based on the selected category -->
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3 text-center">
                <button type="button" class="btn btn-primary mr-4" id="addModuleBtn">Add Another Module</button>
                <button type="submit" class="btn btn-success">Save Unit</button>
            </div>
        </form>
    </div>

    <!-- Add Bootstrap and jQuery scripts here -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // JavaScript logic to handle category button clicks
        $('.category-btn').on('click', function() {
            const selectedCategory = $(this).data('category');

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
                    $('.module-select').empty();

                    // Populate the dropdown with new options
                    $.each(data, function(id, name) {
                        $('.module-select').append($('<option>', {
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
            // Create a new module selection field
            const moduleField = `
                <div class="mb-3">
                    <label class="form-label">Quantity</label>
                    <input type="text" name="quantity[]" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Select Module:</label>
                    <select class="form-select module-select" name="module[]">
                        <!-- Dropdown options will be populated based on the selected category -->
                    </select>
                </div>
            `;

            // Append the new module field to the form
            $('.module-fields').append(moduleField);

            // Update the module dropdown options for the new field
            const selectedCategory = $('.category-btn.active').data('category');
            $.ajax({
                url: 'getModulesByCategory',
                method: 'GET',
                data: { category: selectedCategory },
                success: function(data) {
                    const $moduleSelect = $('.module-select').last();
                    $moduleSelect.empty();
                    $.each(data, function(id, name) {
                        $moduleSelect.append($('<option>', {
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
    </script>
@endsection
