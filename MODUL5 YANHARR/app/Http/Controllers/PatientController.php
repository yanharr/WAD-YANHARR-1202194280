<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use App\Models\Vaccines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PatientController extends Controller
{
    public function index()
    {
        $patient = Patients::all();
        return view('patient.index', compact('patient'));
    }

    public function listVaccine()
    {
        $vaccine = Vaccines::all();
        return view('patient.list-vaccine', compact('vaccine'));
    }

    public function add(Request $request, $id)
    {
        $vcn = Vaccines::findOrFail($id);
        return view('patient.add', compact('vcn'));
    }

    public function store(Request $request)
    {
        $fileName = time() . '.' . $request->image_ktp->getClientOriginalExtension();
        $request->file('image_ktp')->storeAs('image-ktp', $fileName);

        $patient = new Patients;
        $patient->vaccine_id = $request->vaccineId;
        $patient->name = $request->name;
        $patient->nik = $request->nik;
        $patient->alamat = $request->alamat;
        $patient->image_ktp = $fileName;
        $patient->no_hp = $request->no_hp;
        $patient->save();

        return redirect()->route('patient.index');
    }

    public function edit($id)
    {
        $ptn = Patients::where('id', $id)->first();
        return view('patient.edit', compact('ptn'));
    }

    public function update(Request $request, $id)
    {
        $patient = Patients::findOrFail($id);
        File::delete('storage/image-ktp/' . $patient->image_ktp);
        $fileName = time() . '.' . $request->image_ktp->getClientOriginalExtension();
        $request->file('image_ktp')->storeAs('image-ktp', $fileName);

        $patient->update([
            'vaccine_id' => $request->vaccineId,
            'name' => $request->name,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'image_ktp' => $fileName,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('patient.index');
    }

    public function delete($id)
    {
        // hapus file
        $patient = Patients::findOrFail($id);
        File::delete('storage/image-ktp/' . $patient->image_ktp);
        $patient->delete();

        return redirect()->route('patient.index');
    }
}
