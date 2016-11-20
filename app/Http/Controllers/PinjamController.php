<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pinjam;
use App\Anggota;
use App\Buku;
use Pagination\Paginator;
use App\Http\Requests\Pinjam\StoreRequest;
use App\Http\Requests\Pinjam\EditRequest;

class PinjamController extends Controller
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
        $pinjams = Pinjam::where('status','pinjam')->orderBy('created_at','DESC')->paginate(5);
        return view('adminpanel.peminjam.index', compact('pinjams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggotas = Anggota::all();
        $bukus = Buku::all();
        return view('adminpanel.peminjam.create', compact('anggotas','bukus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $pinjams = new Pinjam();
        $pinjams->anggota_id = $request->anggota_id;
        $pinjams->buku_id = $request->buku_id;
        $pinjams->tgl_pinjam = $request->tgl_pinjam;
        $pinjams->tgl_kembali = $request->tgl_kembali;
        $pinjams->status = $request->status;
        $pinjams->save();
        return redirect()->route('pinjam.index')->with('alert-success', 'Data Berhasil Ditambah');
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
        $pinjams = Pinjam::findOrFail($id);
        $bukus = Buku::lists('judul', 'id')->all();
        $anggotas = Anggota::lists('nis', 'id')->all();
        return view('adminpanel.peminjam.edit', compact('pinjams','anggotas','bukus'));
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
        $pinjams = Pinjam::findOrFail($id);
        $pinjams->anggota_id = $request->anggota_id;
        $pinjams->buku_id = $request->buku_id;
        $pinjams->tgl_pinjam = $request->tgl_pinjam;
        $pinjams->tgl_kembali = $request->tgl_kembali;
        $pinjams->status = $request->status;
        $pinjams->save();
        return redirect()->route('kembali.index')->with('alert-success', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pinjams = Pinjam::findOrFail($id);
        $pinjams->delete();
        return redirect()->route('pinjam.index')->with('alert-success', 'Data Berhasil di Hapus');
    }

    /**
     * search the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        $cari = $request->get('search');
        $pinjams = Pinjam::where('anggota_id','LIKE','%'.$cari.'%')->paginate(5);
        return view('adminpanel.peminjam.index', compact('pinjams','anggotas'));
    }

    public function kembali(Request $request){
        $pinjams = Pinjam::where('status','bebas')->paginate(5);
        return view('adminpanel.kembali.index', compact('pinjams'));
    }
}
