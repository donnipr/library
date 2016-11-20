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
                <div class="panel-heading">UBAH DATA PENERBIT</div>

                <div class="panel-body">
                    {{ Form::model($penerbits, ['route'=>['penerbit.update', $penerbits->id], 'method'=>'PATCH']) }}
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            {{ Form::label('nama', 'Nama penerbit') }}
                            {{ Form::text('nama', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Nama Penerbit']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            {{ Form::label('alamat', 'Alamat') }}
                            {{ Form::textarea('alamat', null, ['class'=>'form-control', 'placeholder'=>'Masukkan alamat']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('telp') ? ' has-error' : '' }}">
                            {{ Form::label('telp', 'Telp') }}
                            {{ Form::text('telp', null, ['class'=>'form-control', 'placeholder'=>'Masukkan telp']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Ubah', ['class'=>'btn btn-info']) }}
                        </div>
                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
