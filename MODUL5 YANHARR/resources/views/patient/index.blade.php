@extends('layout')
@section('title','Patient')

@section('main-content')
<div class="container">
    @if ($patient->count() > 0)
        <div class="row text-center mb-3">
            <h3>List Patient</h3>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('patient.list-vaccine') }}" role="button">Register Patient</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-primary table-striped shadow ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Vaccine</th>
                            <th>Name</th>
                            <th>NIK</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patient as $ptn)
                            <tr>
                                <td>{{ $ptn->id }}</td>
                                <td>{{ $ptn->vaccine->name }}</td>
                                <td>{{ $ptn->name }}</td>
                                <td>{{ $ptn->nik }}</td>
                                <td>{{ $ptn->alamat }}</td>
                                <td>{{ $ptn->no_hp }}</td>
                                <td>
                                    <abbr title="Edit data"><a href="{{ route('patient.edit', $ptn->id)  }}" class="btn btn-warning">Edit</a></abbr>
                                    <abbr title="Hapus data"><a href="{{ route('patient.delete', $ptn->id)  }}" class="btn btn-danger">Delete</a></abbr>
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
                <a class="btn btn-primary" href="{{ route('patient.list-vaccine') }}" role="button">Register Patient</a>
            </div>
        </div>
    @endif
</div>

@endsection