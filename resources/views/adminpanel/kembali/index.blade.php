@extends('layouts.master')
@section('content')

<div class="container">
{{ Form::open(['method'=>'GET','url'=>'carikembali','role'=>'search']) }}
<div class="input-group custom-search-form">
<input type="text" class="form-control" name="search" placeholder="search here....">
<span class="input-group-btn">
<span class="input-group-btn">
<button class="btn btn-default" type="submit"><i class="fa fa-search"></i>Search</button>
</span>
</span>
</div>
{{ Form::close() }}
</div>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading"><strong>DATA PENGEMBALIAN BUKU</strong></div>

                <div class="panel-body">
                    @if(Session::has('alert-success'))
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4>    <i class="icon fa fa-check"></i> Successfully!</h4>
                            {{ Session::get('alert-success') }}
                        </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td><strong>NO</strong></td>
                                <td><strong>NIS</strong></td>
                                <td><strong>NAMA SISWA</strong></td>
                                <td><strong>BUKU</strong></td>
                                <td><strong>TANGGAL KEMBALI</strong></td>
                                <td><strong>TANGGAL KEMBALI</strong></td>
                                <td><strong>STATUS</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                            @foreach($pinjams as $pinjam)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pinjam->anggota->nis }}</td>
                                <td>{{ $pinjam->anggota->nama }}</td>
                                <td>{{ $pinjam->buku->judul }}</td>
                                <td>{{ $pinjam->tgl_pinjam }} </td>
                                <td>{{ $pinjam->tgl_kembali }}</td>
                                <td>{{ $pinjam->status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ $pinjams->links() }}
</div>

@endsection
