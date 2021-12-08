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
            <label>Company Name</label>
            <input type="text" name="name" style="color:black" placeholder="Write the name">

        </div>
        <div  style="padding-top: 10px">
            <label>Company Image</label>
            <input type="file" name="file">
         </div>
         <div  style="padding-top: 10px;">
            <input type="submit" class="btn btn-primary">
         </div>


    </form>

</div>
@endsection
