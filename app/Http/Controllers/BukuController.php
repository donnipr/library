<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Buku\StoreRequest;
use App\Http\Requests\Buku\EditRequest;
use App\Buku;
use App\Pengarang;
use App\Penerbit;
use App\Rak;
use Pagination\Paginator;



class BukuController extends Controller
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
        $bukus = Buku::orderBy('created_at','DESC')->paginate(5);
        return view('adminpanel.buku.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengarangs = Pengarang::all();
        $penerbits = Penerbit::all();
        $raks = Rak::all();
        return view('adminpanel.buku.create', compact('pengarangs', 'penerbits', 'raks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $bukus = new Buku();
        $bukus->isbn = $request->isbn;
        $bukus->judul = $request->judul;
        $bukus->desk = $request->desk;
        $bukus->pengarang_id = $request->pengarang_id;
        $bukus->penerbit_id = $request->penerbit_id;
        $bukus->jumlah = $request->jumlah;
        $bukus->thn_terbit = $request->thn_terbit;
        $bukus->rak_id = $request->rak_id;
        $bukus->save();
        return redirect()->route('buku.index')->with('alert-success', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bukus = Buku::find($id);
        return view('adminpanel.buku.single', compact('bukus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bukus = Buku::findOrFail($id);
        $pengarangs = Pengarang::lists('nama', 'id')->all();
        $penerbits = Penerbit::lists('nama', 'id')->all();
        $raks = Rak::lists('lokasi', 'id')->all();
        return view('adminpanel.buku.edit', compact('bukus', 'pengarangs', 'penerbits','raks'));
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
        $bukus = Buku::findOrFail($id);
        $bukus->isbn = $request->isbn;
        $bukus->judul = $request->judul;
        $bukus->desk = $request->desk;
        $bukus->pengarang_id = $request->pengarang_id;
        $bukus->penerbit_id = $request->penerbit_id;
        $bukus->jumlah = $request->jumlah;
        $bukus->thn_terbit = $request->thn_terbit;
        $bukus->rak_id = $request->rak_id;
        $bukus->save();
        return redirect()->route('buku.index')->with('alert-success', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bukus = Buku::findOrFail($id);
        $bukus->delete();
        return redirect()->route('buku.index')->with('alert-success', 'Data Berhasil di Hapus');
    }

    /**
     * search the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        $cari = $request->get('search');
        $bukus = Buku::where('judul','LIKE','%'.$cari.'%')->paginate(5);
        return view('adminpanel.buku.index', compact('bukus'));
    }
}
