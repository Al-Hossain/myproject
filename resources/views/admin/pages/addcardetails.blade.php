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
            <label>Car Name</label>
            <input type="text" name="name" style="color:black" placeholder="Write the name">

        </div>

        <div  style="padding-top: 10px">
            <label>Car Type</label>
            <input type="text" name="Type" style="color:black" placeholder="Write the Type">

        </div>

        <div  style="padding-top: 10px">
            <label>Body Color</label>
            <input type="text" name="color" style="color:black" placeholder="Write the color">

        </div>
        
        <div  style="padding-top: 10px">
            <label>Car Company</label>
            <select style="width: 195px;">
                <option>--Select--</option>
                <option value="Audi">Audi</option>
                <option value="Bajaj">Bajaj</option>
                <option value="BMW">BMW</option>
                <option value="Bugatti">Bugatti</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Ferrari">Ferrari</option>
                <option value="Fiat">Fiat</option>
                <option value="Ford">Ford</option>
                <option value="Honda">Honda</option>
                <option value="Jaguar">Jguar</option>
                <option value="Hyundai">Hyundai</option>
                <option value="Lexus">Lexus</option>
                <option value="Mahindra">Mahindra</option>
                <option value="Maruti Suzuki">Maruti Suzuki</option>
                <option value="Mercedes-Benz">Mercedes-Benz</option>
                <option value="MG Motor">MG Motor</option>
                <option value="Mitsubishi">Mitsubishi</option>
                <option value="Nissan">Nissan</option>
                <option value="Renault">Renault</option>
                <option value="Skoda">Skoda</option>
                <option value="Tata">Tata</option>
                
            </select>

        </div>

        <div  style="padding-top: 10px">
            <label>Fuel Type</label>
            <input type="text" name="fuel" style="color:black" placeholder="Write the Fuel Type">

        </div>
        <div  style="padding-top: 10px">
            <label>Car Price</label>
            <input type="number" name="price" style="color:black" placeholder="Write the price">

        </div>
        <div  style="padding-top: 10px">
            <label>Max Power</label>
            <input type="text" name="Max Power" style="color:black" placeholder="Write the Max Power">

        </div>
        <div  style="padding-top: 10px">
            <label>Transmission Type</label>
            <select style="width: 195px;">
                <option>--Select--</option>
                <option value="Automatic">Automatic</option>
                <option value="Manual">Manual</option>
                <option value="Semi-Automatic">Semi-Automatic</option>   
            </select>

        </div>
        <div  style="padding-top: 10px">
            <label>Car ABS</label>
            <select style="width: 195px;">
                <option>--Select--</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option>   
            </select>

        </div>
        <div  style="padding-top: 10px">
            <label>Car Price</label>
            <input type="number" name="number" style="color:black" placeholder="Write the price">

        </div>
        <div  style="padding-top: 10px">
            <label>Car Description</label>
            <input type="text" name="Car Description" style="color:black" placeholder="Write the Description">

        </div>
        <div  style="padding-top: 10px">
            <label>Car Image 01</label>
            <input type="file" name="file">
         </div>
         <div  style="padding-top: 10px">
            <label>Car Image 02</label>
            <input type="file" name="file">
         </div>
         <div  style="padding-top: 10px">
            <label>Car Image 03</label>
            <input type="file" name="file">
         </div>
         <div  style="padding-top: 10px">
            <label>Car Image 04</label>
            <input type="file" name="file">
         </div>
         <div  style="padding-top: 10px;">
            <input type="submit" class="btn btn-primary">
         </div>
         {{-- <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div> --}}
         

    </form>

</div>
@endsection
