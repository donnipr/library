<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Penerbit;
use Pagination\Paginator;
use App\Http\Requests\Penerbit\StoreRequest;
use App\Http\Requests\Penerbit\EditRequest;

class PenerbitController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerbits = Penerbit::orderBy('created_at','DESC')->paginate(5);
        return view('adminpanel.penerbit.index', compact('penerbits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.penerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $penerbits = new Penerbit();
        $penerbits->nama =  $request->nama;
        $penerbits->alamat =  $request->alamat;
        $penerbits->telp = $request->telp;
        $penerbits->save();
        return redirect()->route('penerbit.index')->with('alert-success', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penerbits = Penerbit::findOrFail($id);
        return view('adminpanel.penerbit.edit', compact('penerbits'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
        $penerbits = Penerbit::findOrFail($id);
        $penerbits->nama = $request->nama;
        $penerbits->alamat = $request->alamat;
        $penerbits->telp = $request->telp;
        $penerbits->save();
        return redirect()->route('penerbit.index')->with('alert-success', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerbits = Penerbit::findOrFail($id);
        $penerbits->delete();
        return redirect()->route('penerbit.index')->with('alert-success', 'Data Berhasil di Hapus');
    }

    /**
     * search the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        $cari = $request->get('search');
        $penerbits = Penerbit::where('nama','LIKE','%'.$cari.'%')->paginate(5);
        return view('adminpanel.penerbit.index', compact('penerbits'));
    }
}
