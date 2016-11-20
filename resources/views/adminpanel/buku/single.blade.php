@extends('layouts.master')
@section('content')

<a class="btn btn-info"  href="{{ route('buku.index') }}">DAFTAR BUKU</a>
<div class="content">
<div class="container">
<li>ISBN</li>
<h3>{{ $bukus->isbn }}</h3>
<li>JUDUL</li>
<h3>{{ $bukus->judul }}</h3>
<li><p>DESKRIPSI BUKU<p></li>
<h3>{{ $bukus->desk }}</h3>
<li>PENGARANG</li>
<h3>{{ $bukus->pengarang->nama }}</h3>
<li>PENGARANG</li>
<h3>{{ $bukus->pengarang->nama }}</h3>
<li>PENERBIT</li>
<h3>{{ $bukus->penerbit->nama }}</h3>
<li>JUMLAH</li>
<h3>{{ $bukus->jumlah }}</h3>
<li>TAHUN TERBIT</li>
<h3>{{ $bukus->thn_terbit }}</h3>
<li>LOKASI BUKU</li>
<h3>{{ $bukus->rak->lokasi }}</h3>
<p><i>posted {{ $bukus->created_at->diffForHumans() }}</i></p>
</div>
</div>

@endsection
