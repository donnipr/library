@extends('layouts.master')
@section('content')

@if($errors->any())
 <div class="alert alert-danger alert-dismissible" role="alert">
 <button type="button" class="close" data-dismiss="alert" aria-label="close">
 <span aria-hidden="true">&times;</span>
</button><em>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</em>
</div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">UBAH DATA PEMINJAM</div>

                <div class="panel-body">
                    {{ Form::model($pinjams, ['route'=>['pinjam.update', $pinjams->id], 'method'=>'PATCH']) }}
                        <div class="form-group{{ $errors->has('anggota_id') ? ' has-error' : '' }}">
                            {{ Form::label('anggota_id', 'Anggota') }}
                            {{ Form::select('anggota_id', $anggotas, null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('buku_id') ? ' has-error' : '' }}">
                            {{ Form::label('buku_id', 'buku') }}
                            {{ Form::select('buku_id', $bukus, null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('tgl_pinjam') ? ' has-error' : '' }}">
                            {{ Form::label('tgl_pinjam', 'Tanggal Pinjam') }}
                            {{ Form::text('tgl_pinjam', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Nis']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('tgl_kembali') ? ' has-error' : '' }}">
                            {{ Form::label('tgl_kembali', 'Tanggal Kembali') }}
                            {{ Form::text('tgl_kembali', null, ['class'=>'form-control', 'placeholder'=>'Masukkan nama']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            {{ Form::label('status', 'Status') }}
                            <select name="status" class="form-control">
                            
                                <option value="Bebas">Bebas</option>
                               
                            </select>
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group">
                            {{ Form::submit('Ubah', ['class'=>'btn btn-info']) }}
                        </div>
                    {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@endsection
