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
			<h4><strong>TAMBAH DATA PENERBIT</strong></h4></div>
			<div class="panel-body">
			<div class="form-group">
				{{ Form::open(['route' => 'penerbit.store']) }}
				<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
				<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''  }}">
					{{ Form::label('nama','Nama Penerbit') }}
					{{ Form::text('nama','',['placeholder' => 'Masukkan nama penerbit','class' => 'form-control']) }}
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
