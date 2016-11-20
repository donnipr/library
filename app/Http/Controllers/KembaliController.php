<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kembali;
use App\Pinjam;
use Pagination\Paginator;

class KembaliController extends Controller
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
        $pinjams = Pinjam::where('status','bebas')->paginate(5);
        return view('adminpanel.kembali.index', compact('pinjams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('adminpanel.kembali.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kembalis = new Kembali();
        $kembalis->pinjam_id = $request->pinjam_id;
        $kembalis->terlambat = $request->terlambat;
        $kembalis->denda = $request->denda;
        $kembalis->status = $request->status;
        $kembalis->save();
        return redirect()->route('kembali.index')->with('alert-success', 'Data Berhasil Ditambah');
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
        $kembalis = Kembali::findOrFail($id);
        $pinjams = Pinjam::lists('anggota_id', 'id')->all();
        return view('adminpanel.kembali.edit', compact('kembalis','pinjams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kembalis = Kembali::findOrFail($id);
        $kembalis->pinjam_id = $request->pinjam_id;
        $kembalis->terlambat = $request->terlambat;
        $kembalis->denda = $request->denda;
        $kembalis->status = $request->status;
        $kembalis->save();
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
        $kembalis = Kembali::findOrFail($id);
        $kembalis->delete();
        return redirect()->route('kembali.index')->with('alert-success', 'Data Berhasil di Hapus');
    }

    /**
     * search the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        $cari = $request->get('search');
        $kembalis = Kembali::where('pinjam_id','LIKE','%'.$cari.'%')->paginate(5);
        return view('adminpanel.kembali.index', compact('kembalis'));
    }
}
