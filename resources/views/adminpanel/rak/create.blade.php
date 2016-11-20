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
			<h4><strong>TAMBAH LOKASI BUKU</strong></h4></div>
			<div class="panel-body">
			<div class="form-group">
				{{ Form::open(['route' => 'rak.store']) }}
				<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
				<div class="form-group {{ $errors->has('lokasi') ? 'has-error' : ''  }}"> 
					{{ Form::label('lokasi','Lokasi') }}
					{{ Form::text('lokasi','',['placeholder' => 'Masukkan Lokasi Buku','class' => 'form-control']) }}
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