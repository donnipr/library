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
			<h4><strong>TAMBAH DATA BUKU</strong></h4></div>
			<div class="panel-body">
			<div class="form-group">
				{{ Form::open(['route' => 'buku.store']) }}
				<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
				<div class="form-group {{ $errors->has('isbn') ? 'has-error' : ''  }}">
					{{ Form::label('isbn','Isbn') }}
					{{ Form::text('isbn','',['placeholder' => 'Masukkan isbn buku','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
				<div class="form-group {{ $errors->has('judul') ? 'has-error' : ''  }}">
					{{ Form::label('judul','Judul') }}
					{{ Form::text('judul','',['placeholder' => 'Masukkan judul buku','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
				<div class="form-group {{ $errors->has('desk') ? 'has-error' : ''  }}">
					{{ Form::label('desk','Deskripsi') }}
					{{ Form::textarea('desk','',['placeholder' => 'Masukkan deskripsi buku','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
				<div class="form-group{{ $errors->has('pengarang_id') ? ' has-error' : '' }}">
         			 {{ Form::label('pengarang_id', 'Pengarang') }}
           				 <select name="pengarang_id" class="form-control">
            				<option value="">-- Pilih Pengarang --</option>
            				@foreach ($pengarangs as $pengarang)
            				<option value="{{ $pengarang->id }}">{{ $pengarang->nama }}</option>
            				@endforeach
            				</select>
          			{{ $errors->first('', '<p class="help-block"></p>') }}
        		</div>
        		<div class="form-group{{ $errors->has('penerbit_id') ? ' has-error' : '' }}">
          			{{ Form::label('penerbit_id', 'Penerbit') }}
                        <select name="penerbit_id" class="form-control">
                            <option value="">-- Pilih Penerbit --</option>
                            @foreach ($penerbits as $penerbit)
                            <option value="{{ $penerbit->id }}">{{ $penerbit->nama }}</option>
                            @endforeach
                        </select>
                    {{ $errors->first('', '<p class="help-block"></p>') }}
        		</div>
        		<div class="form-group {{ $errors->has('jumlah') ? 'has-error' : ''  }}">
					{{ Form::label('jumlah','Jumlah') }}
					{{ Form::text('jumlah','',['placeholder' => 'Masukkan jumlah buku','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
				<div class="form-group {{ $errors->has('thn_terbit') ? 'has-error' : ''  }}">
					{{ Form::label('thn_terbit','Tahun Terbit') }}
					{{ Form::text('thn_terbit','',['placeholder' => 'Masukkan tahun terbit buku','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
				<div class="form-group{{ $errors->has('rak_id') ? ' has-error' : '' }}">
                    {{ Form::label('rak_id', 'Lokasi') }}
                        <select name="rak_id" class="form-control">
                            <option value="">-- Pilih Lokasi Buku --</option>
                            @foreach ($raks as $rak)
                            <option value="{{ $rak->id }}">{{ $rak->lokasi }}</option>
                            @endforeach
                        </select>
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>
				</div>
					{{ Form::submit('Save',['class' => 'btn btn-primary']) }}
					{{ Form::reset('reset',['class' => 'btn btn-danger']) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@endsection
