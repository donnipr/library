<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengarang;
use Pagination\Paginator;
use App\Http\Requests\Pengarang\StoreRequest;
use App\Http\Requests\Pengarang\EditRequest;

class PengarangController extends Controller
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
         $pengarangs = Pengarang::orderBy('created_at','DESC')->paginate(5);
        return view('adminpanel.pengarang.index', compact('pengarangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.pengarang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $pengarangs = new Pengarang();
        $pengarangs->nama =  $request->nama;
        $pengarangs->alamat =  $request->alamat;
        $pengarangs->telp = $request->telp;
        $pengarangs->save();
        return redirect()->route('pengarang.index')->with('alert-success', 'Data Berhasil Ditambah');
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
        $pengarangs = Pengarang::findOrFail($id);
        return view('adminpanel.pengarang.edit', compact('pengarangs'));
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
        $pengarangs = Pengarang::findOrFail($id);
        $pengarangs->nama = $request->nama;
        $pengarangs->alamat = $request->alamat;
        $pengarangs->telp = $request->telp;
        $pengarangs->save();
        return redirect()->route('pengarang.index')->with('alert-success', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengarangs = Pengarang::findOrFail($id);
        $pengarangs->delete();
        return redirect()->route('pengarang.index')->with('alert-success', 'Data Berhasil di Hapus');
    }

    /**
     * search the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        $cari = $request->get('search');
        $pengarangs = Pengarang::where('nama','LIKE','%'.$cari.'%')->paginate(5);
        return view('adminpanel.pengarang.index', compact('pengarangs'));
    }
}
