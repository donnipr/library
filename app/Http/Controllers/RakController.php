<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Rak;
use Pagination\Paginator;
use App\Http\Requests\Rak\StoreRequest;
use App\Http\Requests\Rak\EditRequest;

class RakController extends Controller
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
        $raks = Rak::orderBy('created_at','DESC')->paginate(10);
        return view('adminpanel.rak.index', compact('raks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.rak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $raks = new Rak();
        $raks->lokasi =  $request->lokasi;
        $raks->save();
        return redirect()->route('rak.index')->with('alert-success', 'Data Berhasil Ditambah');
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
         $raks = Rak::findOrFail($id);
        return view('adminpanel.rak.edit', compact('raks'));
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
        $raks = Rak::findOrFail($id);
        $raks->lokasi = $request->lokasi;
        $raks->save();
        return redirect()->route('rak.index')->with('alert-success', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $raks = Rak::findOrFail($id);
        $raks->delete();
        return redirect()->route('rak.index')->with('alert-success', 'Data Berhasil di Hapus');
    }

    /**
     * search the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        $cari = $request->get('search');
        $raks = Rak::where('lokasi','LIKE','%'.$cari.'%')->paginate(5);
        return view('adminpanel.rak.index', compact('raks'));
    }
}
