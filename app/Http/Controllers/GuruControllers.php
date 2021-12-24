<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gur = Guru::latest()->paginate(5);
        return view ('gur.index',compact('gur'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'NIG' => 'required',
            'NamaGuru' => 'required',
            'Alamat' => 'required',
            'Kelas' => 'required',
            'Pelajaran' => 'required',
            'Jadwal' => 'required',
        ]);
        Guru::create($request->all());

        return redirect()->route('gur.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $gur)
    {
        return view('gur.show',compact('gur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $gur)
    {
        return view('gur.edit', compact('gur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $gur)
    {
        $request->validate([
            'NIG' => 'required',
            'NamaGuru' => 'required',
            'Alamat' => 'required',
            'Kelas' => 'required',
            'Pelajaran' => 'required',
            'Jadwal' => 'required',
        ]);

        $gur->update($request->all());

        return redirect()->route('gur.index')->with('succes','Guru Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $gur)
    {
        $gur->delete();

        return redirect()->route('gur.index')->with('succes','Guru Berhasil di Hapus');
    }
}