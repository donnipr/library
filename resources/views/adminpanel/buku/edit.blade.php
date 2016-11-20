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
                <div class="panel-heading">UBAH DATA ANGGOTA</div>

                <div class="panel-body">
                    {{ Form::model($bukus, ['route'=>['buku.update', $bukus->id], 'method'=>'PATCH']) }}
                        <div class="form-group{{ $errors->has('isbn') ? ' has-error' : '' }}">
                            {{ Form::label('isbn', 'Isbn') }}
                            {{ Form::text('isbn', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Nis']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            {{ Form::label('judul', 'Judul') }}
                            {{ Form::text('judul', null, ['class'=>'form-control', 'placeholder'=>'Masukkan nama']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('desk') ? ' has-error' : '' }}">
                            {{ Form::label('desk', 'Deskripsi') }}
                            {{ Form::textarea('desk', null, ['class'=>'form-control', 'placeholder'=>'Masukkan nama']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('pengarang_id') ? ' has-error' : '' }}">
                            {{ Form::label('pengarang_id', 'Kode Pengarang') }}
                            {{ Form::select('pengarang_id', $pengarangs, null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('penerbit_id') ? ' has-error' : '' }}">
                            {{ Form::label('penerbit_id', 'Kode Penerbit') }}
                            {{ Form::select('penerbit_id', $penerbits, null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('jumlah') ? ' has-error' : '' }}">
                            {{ Form::label('jumlah', 'Jumlah') }}
                            {{ Form::text('jumlah', null, ['class'=>'form-control', 'placeholder'=>'Masukkan alamat']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('thn_terbit') ? ' has-error' : '' }}">
                            {{ Form::label('thn_terbit', 'Tahun Terbit') }}
                            {{ Form::text('thn_terbit', null, ['class'=>'form-control', 'placeholder'=>'Masukkan telp']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('rak_id') ? ' has-error' : '' }}">
                            {{ Form::label('rak_id', 'Rak') }}
                            {{ Form::select('rak_id', $raks, null, ['class'=>'form-control']) }}
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
</div>

@endsection
