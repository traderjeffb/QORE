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
                        <div class="form-group row">
                            <label for="partName" class="col-md-4 col-form-label text-md-right">Part Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="partName" name="partName" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">Category:</label>
                            <div class="col-md-6">
                                <select class="form-control" id="category" name="category">
                                    <option value="">Select a category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category }}">{{ $category }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="partNumber" class="col-md-4 col-form-label text-md-right">Part Number</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="partNumber" name="partNumber" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="description" name="description" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-2">
                                <label for="inventory" class="col-form-label text-md-right">Inventory</label>
                                <input type="number" class="form-control" id="inventory" name="inventory" required>
                            </div>

                            <div class="col-md-2">
                                <label for="caseSize" class="col-form-label text-md-right">Case Size</label>
                                <input type="number" class="form-control" id="caseSize" name="caseSize" required>
                            </div>

                            <div class="col-md-3">
                                <label for="minimumInventory" class="">Minimum Inventory</label>
                                <input type="number" class="form-control" id="minimumInventory" name="minimumInventory" required>
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <h3>Precious Metals in this part in Ounces:</h3>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-2">
                                <label for="gold">Gold:</label>
                                <input type="number" class="form-control" id="gold" name="gold" min="0" max="99999" value="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="silver">Silver:</label>
                                <input type="number" class="form-control" id="silver" name="silver" min="0" max="99999" value="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="platinum">Platinum:</label>
                                <input type="number" class="form-control" id="platinum" name="platinum" min="0" max="99999" value="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="palladium">Palladium:</label>
                                <input type="number" class="form-control" id="palladium" name="palladium" min="0" max="99999"  value="0">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-block">Add Part</button>
                            </div>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
