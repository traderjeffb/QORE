@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-10 shadow">
        <form method="POST" action="{{ route('modules.store') }}">
          @csrf

          <div class="form-group mt-2">
            <h3>Name of Module:</h3>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group mt-2">
            <label for="category"><h3>Category of Module</h3></label>
            <select class="form-control" id="category" name="category" required>
                <option value="Large Table">Full Spectrum Lighting</option>
                <option value="Small Tabletop">Mass Spectometer</option>
                <option value="Large Linear">Flash Proton Recorder</option>
                <option value="Small Linear">Computer</option>
                <option value="Camera">Camera</option>
                <option value="Particle Accelerator">Particle Accelerator</option>
                <option value="Microscopic Lens">Microscopic lens</option>
                <option value="Electromagnetic Flow Meter">Electomagmetoc Flow Meter</option>
                <option value="Robotic Arm">Robotic Arm</option>
                <option value="Subatomic Grasp Tweezer">Subatomic grasp Tweezers</option>
                <option value="Microscopic Video">Microsopic Video</option>

            </select>
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
            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
      </div>
      </div>
    </div>
</div>
