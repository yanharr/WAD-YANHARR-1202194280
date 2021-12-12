<?php

namespace App\Http\Controllers;

use App\Models\Vaccines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VaccineController extends Controller
{
    public function index()
    {
        $vaccine = Vaccines::all();
        return view('vaccine.index', compact('vaccine'));
    }

    public function add()
    {
        return view('vaccine.add');
    }

    public function store(Request $request)
    {
        $fileName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->file('image')->storeAs('image-vaksin', $fileName);

        $vaccine = new Vaccines;
        $vaccine->name = $request->vaccineName;
        $vaccine->price = $request->price;
        $vaccine->description = $request->description;
        $vaccine->image = $fileName;
        $vaccine->save();

        return redirect()->route('vaccine.index');
    }

    public function edit($id)
    {
        $vcn = Vaccines::where('id', $id)->first();
        return view('vaccine.edit', compact('vcn'));
    }

    public function update(Request $request, $id)
    {
        $vaccine = Vaccines::findOrFail($id);
        File::delete('storage/image-vaksin/' . $vaccine->image);
        $fileName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->file('image')->storeAs('image-vaksin', $fileName);

        $vaccine->update([
            'name' => $request->vaccineName,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $fileName,
        ]);

        return redirect()->route('vaccine.index');
    }

    public function delete($id)
    {
        $vaccine = Vaccines::findOrFail($id);
        File::delete('storage/image-vaksin/' . $vaccine->image);
        $vaccine->delete();

        return redirect()->route('vaccine.index');
    }
}
