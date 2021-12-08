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
            <label>Page Title*</label>
            <input type="text" name="title" style="color:black" placeholder="Contact Us">

        </div>
        <div style="padding-top: 10px">
            <label>Head Office*</label>
            <input type="text" name="headoffice" style="color: grey" placeholder="Write the head office">

        </div>
        <div style="padding-top: 10px">
            <label>Email*</label>
            <input type="text" name="email" style="color:grey" placeholder="Write the Email">

        </div>
        <div style="padding-top: 10px">
            <label>Phone No.*</label>
            <input type="number" name="phoneno" style="color:grey" placeholder="Write the Phone no.">

        </div>
        <div style="padding-top: 10px">
            <label>Page Description*</label>
            <input type="text" name="description" style="color:black" placeholder="Write the Description">

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