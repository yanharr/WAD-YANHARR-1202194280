@extends('layout')
@section('title','Add Patient')

@section('main-content')
<div class="container pb-5">
    <div class="row text-center mb-3">
        <h3>Register {{ $vcn->name }} Patient</h3>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form method="POST" action="{{ route('patient.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="vaccineId" class="form-label">Vaccine ID</label>
                    <input type="text" class="form-control" id="vaccineId" name="vaccineId" value="{{ $vcn->id }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Patient Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="mb-3">
                    <label for="image_ktp" class="form-label">KTP</label>
                    <br>
                    <input type="file" name="image_ktp" id="image_ktp">
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp">
                </div>
                <div class="mb-3">
                    <input class="btn btn-primary" type="submit" value="Register">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection