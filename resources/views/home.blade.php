@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p class="mt-8  dark:bg-gray-800 text-lg">Register citizens with their name,ward,LGA,State, phone_number and gender</p>
            <form action="{{route('register.citizen')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1" class="m-2">Name:</label>
                    <input type="text" class="form-control" id="exampleInputName" name="citizen_name" aria-describedby="nameHelp" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="m-2">Phone Number:</label>
                    <input type="text" class="form-control" id="exampleInputNumber" name="phone" aria-describedby="numberHelp" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="m-2">Gender:</label>
                    <select onchange="toggleLGA(this);" name="gender" id="state" class="form-control" required>
                        <option value="" selected="selected">- Select -</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="m-2">Address:</label>
                    <input type="text" class="form-control" id="exampleInputAddress" name="address" aria-describedby="addressHelp" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="m-2">State:</label>
                    <select onchange="toggleLGA(this);" name="state_name" id="state" class="form-control" required>
                        <option value="" selected="selected">- Select -</option>
                        <option value="Abia">Abia</option>
                        <option value="Adamawa">Adamawa</option>
                        <option value="AkwaIbom">AkwaIbom</option>
                        <option value="Anambra">Anambra</option>
                        <option value="Bauchi">Bauchi</option>
                        <option value="Bayelsa">Bayelsa</option>
                        <option value="Benue">Benue</option>
                        <option value="Borno">Borno</option>
                        <option value="Cross River">Cross River</option>
                        <option value="Delta">Delta</option>
                        <option value="Ebonyi">Ebonyi</option>
                        <option value="Edo">Edo</option>
                        <option value="Ekiti">Ekiti</option>
                        <option value="Enugu">Enugu</option>
                        <option value="FCT">FCT</option>
                        <option value="Gombe">Gombe</option>
                        <option value="Imo">Imo</option>
                        <option value="Jigawa">Jigawa</option>
                        <option value="Kaduna">Kaduna</option>
                        <option value="Kano">Kano</option>
                        <option value="Katsina">Katsina</option>
                        <option value="Kebbi">Kebbi</option>
                        <option value="Kogi">Kogi</option>
                        <option value="Kwara">Kwara</option>
                        <option value="Lagos">Lagos</option>
                        <option value="Nasarawa">Nasarawa</option>
                        <option value="Niger">Niger</option>
                        <option value="Ogun">Ogun</option>
                        <option value="Ondo">Ondo</option>
                        <option value="Osun">Osun</option>
                        <option value="Oyo">Oyo</option>
                        <option value="Plateau">Plateau</option>
                        <option value="Rivers">Rivers</option>
                        <option value="Sokoto">Sokoto</option>
                        <option value="Taraba">Taraba</option>
                        <option value="Yobe">Yobe</option>
                        <option value="Zamfara">Zamafara</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="m-2">LGA:</label>
                    <select name="lga_name" id="lga" class="form-control select-lga" required>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="m-2">Ward:</label>
                    <input type="text" class="form-control" id="exampleInputAddress" name="ward_name" aria-describedby="addressHelp" required>
                </div>
                <button type="submit" class="btn btn-primary m-2">Submit</button>
            </form>
        </div>
    </div>
</div>
<script src="{{'js/lga.min.js'}}"></script>
<script src="{{'js/lga.js'}}"></script>
@include('sweetalert::alert')
@endsection

