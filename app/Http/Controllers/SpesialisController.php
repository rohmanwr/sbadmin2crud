<?php

namespace App\Http\Controllers;

use App\Models\Spesialis;
use Illuminate\Http\Request;

class SpesialisController extends Controller
{
    public function index()
    {
        $spesialis = Spesialis::all();
        return view('spesialis.index', compact('spesialis'));
    }

    public function create()
    {
        return view('spesialis.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nama_spesialis' => 'required']);
        Spesialis::create($request->all());

        return redirect()->route('spesialis.index')->with('success', 'Spesialis berhasil ditambahkan');
    }

    public function edit($id)
    {
        $spesialis = Spesialis::findOrFail($id);
        return view('spesialis.edit', compact('spesialis'));
    }

    public function update(Request $request, $id)
    {
        $spesialis = Spesialis::findOrFail($id);
        $spesialis->update($request->all());

        return redirect()->route('spesialis.index')->with('success', 'Spesialis berhasil diperbarui');
    }

    public function destroy($id)
    {
        $spesialis = Spesialis::findOrFail($id);
        $spesialis->delete();

        return redirect()->route('spesialis.index')->with('success', 'Spesialis berhasil dihapus');
    }
}
