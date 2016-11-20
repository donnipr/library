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

<div class="continer">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4><strong>TAMBAH DATA ANGGOTA</strong></h4></div>
			<div class="panel-body">
			<div class="form-group">
				{{ Form::open(['route' => 'anggota.store']) }}
				<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
				<div class="form-group{{ $errors->has('nis') ? ' has-error' : ''  }}"> 
					{{ Form::label('nis','Nis') }}
					{{ Form::text('nis','',['placeholder' => 'Masukkan nis siswa','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
				<div class="form-group{{ $errors->has('nama') ? ' has-error' : ''  }}"> 
					{{ Form::label('nama','Nama') }}
					{{ Form::text('nama','',['placeholder' => 'Masukkan nama siswa','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
				<div class="form-group{{ $errors->has('kelas') ? ' has-error' : '' }}">
                            {{ Form::label('kelas', 'Kelas') }}
                            <select name="kelas" class="form-control">
                                <option value="">-- Pilih Kelas --</option>
                                <option value="7A">7A</option>
                                <option value="7B">7B</option>
                                <option value="7C">7C</option>
                                <option value="8A">8A</option>
                                <option value="8B">8B</option>
                                <option value="8C">8C</option>
                                <option value="9A">9A</option>
                                <option value="9B">9B</option>
                                <option value="9C">9C</option>
                            </select>
                			{{ $errors->first('', '<p class="help-block"></p>') }}
                </div>
				<div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                            {{ Form::label('sex', 'Jenis Kelamin') }}
                            <select name="sex" class="form-control">
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki - Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>
				<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''  }}"> 
					{{ Form::label('alamat','Alamat') }}
					{{ Form::textarea('alamat','',['placeholder' => 'Masukkan alamat','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
				<div class="form-group {{ $errors->has('telp') ? 'has-error' : ''  }}"> 
					{{ Form::label('telp','Telp') }}
					{{ Form::text('telp','',['placeholder' => 'Masukkan no telp','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
					{{ Form::submit('Save',['class' => 'btn btn-primary']) }}
					{{ Form::reset('reset',['class' => 'btn btn-danger']) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@endsection