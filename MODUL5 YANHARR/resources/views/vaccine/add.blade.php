@extends('layout')
@section('title','Add Patient')

@section('main-content')
<div class="container">
    <div class="row text-center mb-3">
        <h3>Register</h3>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form method="POST" action="{{ route('vaccine.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="vaccineName" class="form-label">Vaccine Name</label>
                    <input type="text" class="form-control" id="vaccineName" name="vaccineName">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="number" class="form-control" id="price" name="price">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <br>
                    <input type="file" name="image" id="image">
                </div>
                <div class="mb-3">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection