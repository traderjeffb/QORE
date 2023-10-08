@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Part</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('engineering.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="partName">Part Name</label>
                            <input type="text" class="form-control" id="partName" name="partName" required>
                        </div>
                        <div class="form-group">
                            <label for="partNumber">Part Number</label>
                            <input type="text" class="form-control" id="partNumber" name="partNumber" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>
                        <div class="form-group">
                            <label for="category">Category:</label>
                            <select class="form-control" id="category" name="category">
                                <option value="">Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inventory">Inventory</label>
                            <input type="number" class="form-control" id="inventory" name="inventory" required>
                        </div>

                        <div class="form-group">
                            <label for="caseSize">Case Size</label>
                            <input type="number" class="form-control" id="caseSize" name="caseSize" required>
                        </div>

                        <div class="form-group">
                            <label for="minimumInventory">Minimum Inventory</label>
                            <input type="number" class="form-control" id="minimumInventory" name="minimumInventory" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Part</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
