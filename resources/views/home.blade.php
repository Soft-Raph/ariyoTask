@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('register.citizen')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" name="citizen_name" aria-describedby="nameHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="text" class="form-control" id="exampleInputNumber" name="phone" aria-describedby="numberHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
                    <input type="text" class="form-control" id="exampleInputNumber" name="gender" aria-describedby="numberHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputAddress" name="address" aria-describedby="addressHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
                    <input type="text" class="form-control" id="exampleInputAddress" name="state_name" aria-describedby="addressHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">LGA</label>
                    <input type="text" class="form-control" id="exampleInputAddress" name="lga_name" aria-describedby="addressHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ward</label>
                    <input type="text" class="form-control" id="exampleInputAddress" name="ward_name" aria-describedby="addressHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection

