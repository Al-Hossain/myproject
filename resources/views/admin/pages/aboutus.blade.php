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
        <div style="padding-top: 10px">
            <label>Page title*</label>
            <input type="text" name="name" style="color:black" placeholder="Write the title">

        </div>
        <div style="padding-top: 10px">
            <label>Page Description*</label>
            <input type="text" name="name" style="color:black" placeholder="Write the Description">

        </div>
        {{-- <div  style="padding-top: 10px;">
            <input type="update" class="btn btn-primary">
         </div> --}}
         <div  style="padding-top: 10px; class="col-12">
            <button type="update" class="btn btn-primary">Update</button>
          </div>


    </form>

</div>
@endsection