@extends('layout')
@section('title','Edit Patient')

@section('main-content')
<div class="container pb-5">
    <div class="row text-center mb-3">
        <h3>Edit {{ $ptn->vaccine->name }} Patient</h3>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form method="POST" action="{{ route('patient.update', $ptn->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="vaccineId" class="form-label">Vaccine ID</label>
                    <input type="text" class="form-control" id="vaccineId" name="vaccineId" value="{{ $ptn->vaccine->id }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Patient Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $ptn->name }}">
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" value="{{ $ptn->nik }}">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Address</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $ptn->alamat }}">
                </div>
                <div class="mb-3">
                    <label for="image_ktp" class="form-label">KTP</label>
                    <br>
                    <input type="file" name="image_ktp" id="image_ktp">
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $ptn->no_hp }}">
                </div>
                <div class="mb-3">
                    <input class="btn btn-primary" type="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection