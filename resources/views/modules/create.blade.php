@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-10 shadow">
        <form method="POST" action="{{ route('modules.store') }}">
          @csrf
          <div class="form-group mt-2">
            <label for="category"><h3>Category of Module</h3></label>
            <select class="form-control" id="category" name="category" required>
                <option value="Large Table">Large Tabletop</option>
                <option value="Small Tabletop">Small Tabletop</option>
                <option value="Large Linear">Large Linear Flat</option>
                <option value="Small Linear">Small Linear Flat</option>
                <option value="Rotating Spindle">Rotating Spindle</option>
            </select>
        </div>
          <div class="form-group mt-2">
            <h3>Name of Module:</h3>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <h3>Precious Metals:</h3>
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="gold">Gold:</label>
              <input type="number" class="form-control" id="gold" name="gold" min="0" max="99999" required>
            </div>
            <div class="form-group col-md-2">
              <label for="silver">Silver:</label>
              <input type="number" class="form-control" id="silver" name="silver" min="0" max="99999" required>
            </div>
          {{-- </div> --}}
          {{-- <div class="form-row"> --}}
            <div class="form-group col-md-2">
              <label for="platinum">Platinum:</label>
              <input type="number" class="form-control" id="platinum" name="platinum" min="0" max="99999" required>
            </div>
            <div class="form-group col-md-2">
              <label for="palladium">Palladium:</label>
              <input type="number" class="form-control" id="palladium" name="palladium" min="0" max="99999" required>
            </div>

          </div><h3>Rare Earth Metals:</h3>
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="scandium">Scandium:</label>
              <input type="number" class="form-control" id="scandium" name="scandium" min="0" max="99999" required>
            </div>
            <div class="form-group col-md-2">
              <label for="yttrium">Yttrium:</label>
              <input type="number" class="form-control" id="yttrium" name="yttrium" min="0" max="99999" required>
            </div>
            <div class="form-group col-md-2">
              <label for="lanthanum">Lanthanum:</label>
              <input type="number" class="form-control" id="lanthanum" name="lanthanum" min="0" max="99999" required>
            </div>
            <div class="form-group col-md-2">
              <label for="cerium">Cerium:</label>
              <input type="number" class="form-control" id="cerium" name="cerium" min="0" max="99999" required>
            </div>
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="praseodymium">Praseodymium:</label>
              <input type="number" class="form-control" id="praseodymium" name="praseodymium" min="0" required>
            </div>
            <div class="form-group col-md-2">
              <label for="neodymium">Neodymium:</label>
              <input type="number" class="form-control" id="neodymium" name="neodymium" min="0" required>
            </div>
            <div class="form-group col-md-2">
              <label for="promethium">Promethium:</label>
              <input type="number" class="form-control" id="promethium" name="promethium" min="0" required>
            </div>
          {{-- </div> --}}
            <div class="form-group col-md-2">
              <label for="lanthanum">Lanthanum:</label>
              <input type="number" class="form-control" id="lanthanum" name="lanthanum" min="0" max="99999" required>
            </div>
            <div class="form-group col-md-2">
              <label for="cerium">Cerium:</label>
              <input type="number" class="form-control" id="cerium" name="cerium" min="0" max="99999" required>
            </div>
          </div>
            <div class="form-group col-md-2">
              <label for="praseodymium">Praseodymium:</label>
              <input type="number" class="form-control" id="praseodymium" name="praseodymium" min="0" required>
            </div>
            <div class="form-group col-md-2">
              <label for="neodymium">Neodymium:</label>
              <input type="number" class="form-control" id="neodymium" name="neodymium" min="0" required>
            </div>
            <div class="form-group col-md-2">
              <label for="promethium">Promethium:</label>
              <input type="number" class="form-control" id="promethium" name="promethium" min="0" required>
            </div>
            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
      </div>
      </div>
    </div>
</div>
