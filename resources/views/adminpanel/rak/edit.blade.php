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
                <div class="panel-heading">UBAH DATA PENGARANG</div>

                <div class="panel-body">
                    {{ Form::model($raks, ['route'=>['rak.update', $raks->id], 'method'=>'PATCH']) }}
                        <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                            {{ Form::label('lokasi', 'Lokasi') }}
                            {{ Form::text('lokasi', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Lokasi']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::submit('Ubah', ['class'=>'btn btn-info']) }}
                        </div>
                    {{ Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection