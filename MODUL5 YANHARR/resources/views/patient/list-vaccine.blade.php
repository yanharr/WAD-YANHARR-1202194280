@extends('layout')
@section('title','List Vaccine')

@section('main-content')
<div class="container">
    <div class="row text-center mb-3">
        <h3>List Vaccine</h3>
    </div>
    <div class="row justify-content-center">
            @foreach ($vaccine as $vcn)
            <div class="col-md-3 mx-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/image-vaksin/'.$vcn->image) }}" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">{{ $vcn->name }}</h4>
                        <p class="card-text text-muted">Rp {{ $vcn->price }}</p>
                        <p class="card-text">{{ $vcn->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('patient.add', $vcn->id) }}" class="btn btn-primary d-block">Vaccine Now</a>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>

@endsection