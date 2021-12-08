@extends('master')
@section('contents')
<style type="text/css">
    label
    {
        display: inline-block;
        width: 200px;

    }
</style>
<div class ="container">
    <form>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">General Services</legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                    General Automotive Repair
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">
                    Preventative Car Maintenance
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                <label class="form-check-label" for="gridRadios3">
                    Air Conditioning and Heater Service
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option4">
                <label class="form-check-label" for="gridRadios4">
                    Cooling System and Radiator Repair
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios5" value="option5">
                <label class="form-check-label" for="gridRadios5">
                    Synthetic Motor Oil Replacement
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios6" value="option6">
                <label class="form-check-label" for="gridRadios6">
                    Oil Filter Replacement
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios7" value="option7">
                <label class="form-check-label" for="gridRadios7">
                    Brake Repair
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios8" value="option8">
                <label class="form-check-label" for="gridRadios8">
                    Engine Diagnostic

                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios9" value="option9">
                <label class="form-check-label" for="gridRadios9">
                    Transmission Services
                </label>
              </div>
            </div>
          </fieldset>
          <button type="submit" class="btn btn-primary">Submit</button>


    </form>

</div>
@endsection