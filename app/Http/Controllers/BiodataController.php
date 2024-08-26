<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $biodata = Biodata::all();
        return view('biodata.index')->with("biodataItems", $biodata);
    }

    public function create()
    {
        return view('biodata.create');
    }

    public function store(Request $request)
    {
        Biodata::create($request->all());
        return redirect()->route('biodata.index');
    }

    public function edit($id)
    {
        $biodata = Biodata::find($id);
        return view('biodata.edit')->with('item', $biodata);
    }

    public function update($id, Request $request)
    {
        Biodata::find($id)->update($request->all());
        return redirect()->route('biodata.index');
    }

    public function destroy($id)
    {
        Biodata::find($id)->delete();
        return redirect()->route('biodata.index');
    }
}
