@extends('layouts.master')
@section('content')

<div class="container">
{{ Form::open(['method'=>'GET','url'=>'caripengarang','role'=>'search']) }}
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

                <div class="panel-heading"><strong>DATA PENGARANG BUKU</strong></div>

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
                            <tr><td><strong>NO</strong></td>
                                <td><strong>NAMA</strong></td>
                                <td><strong>ALAMAT</strong></td>
                                <td><strong>NO TELP</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                            @foreach($pengarangs as $pengarang)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pengarang->nama }}</td>
                                <td>{{ $pengarang->alamat }}</td>
                                <td>{{ $pengarang->telp }}</td>
                                <td>
                                    <form method="POST" action="{{ route('pengarang.destroy', $pengarang->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <a class="btn btn-primary" href="{{ route('pengarang.edit', $pengarang->id) }}">Edit</a>
                                    <input class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" value="Hapus" />
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('pengarang.create') }}" class="btn btn-info">Tambah</a>
                </div>
            </div>
        </div>
    </div>
    {{ $pengarangs->links() }}
</div>



@endsection
