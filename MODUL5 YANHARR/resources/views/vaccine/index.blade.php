@extends('layout')
@section('title','Vaccine')

@section('main-content')
<div class="container">
    @if ($vaccine->count() > 0)
        <div class="row text-center mb-3">
            <h3>List Vaccine</h3>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('vaccine.add') }}" role="button">Add Vaccine</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-primary table-striped shadow ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vaccine as $vcn)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $vcn->name }}</td>
                                <td>{{ $vcn->price }}</td>
                                <td>
                                    <abbr title="Edit data"><a href="{{ route('vaccine.edit', $vcn->id)  }}" class="btn btn-warning">Edit</a></abbr>
                                    <abbr title="Hapus data"><a href="{{ route('vaccine.delete', $vcn->id)  }}" class="btn btn-danger">Delete</a></abbr>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
    <div class="row text-center mb-5">
        <div class="col-md-12">
            <p class="text-muted">There is no data....</p>
            <a class="btn btn-primary" href="{{ route('vaccine.add') }}" role="button">Add Vaccine</a>
        </div>
    </div>
    @endif


</div>

@endsection