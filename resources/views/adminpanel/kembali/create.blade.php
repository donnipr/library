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
			<h4><strong>TAMBAH DATA PEMINJAM BUKU</strong></h4></div>
			<div class="panel-body">
			<div class="form-group">
				{{ Form::open(['route' => 'pinjam.store']) }}
				<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
				<div class="form-group{{ $errors->has('anggota_id') ? ' has-error' : '' }}">
          			{{ Form::label('anggota_id', 'Siswa') }}
            		<select name="anggota_id" class="form-control">
            			<option value="">-- Siswa --</option>
            				@foreach ($anggotas as $anggota)
            				<option value="{{ $anggota->id }}">{{ $anggota->nis }} <strong>|</strong> {{ $anggota->nama }}</option>
            				@endforeach
            		</select>
         			 {{ $errors->first('', '<p class="help-block"></p>') }}
        		</div>
				<div class="form-group{{ $errors->has('buku_id') ? ' has-error' : '' }}">
          			{{ Form::label('buku_id', 'Buku') }}
            		<select name="buku_id" class="form-control">
            			<option value="">-- Pilih Buku --</option>
            				@foreach ($bukus as $buku)
            				<option value="{{ $buku->id }}">{{ $buku->judul }}</option>
            				@endforeach
            		</select>
         			 {{ $errors->first('', '<p class="help-block"></p>') }}
        		</div>
				<div class="form-group {{ $errors->has('tgl_pinjam') ? 'has-error' : ''  }}">
					{{ Form::label('tgl_pinjam','Tanggal Pinjam') }}
					{{ Form::text('tgl_pinjam','',['placeholder' => 'YYYY-MM-DD, Example : 1996-07-25','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
				<div class="form-group {{ $errors->has('tgl_kembali') ? 'has-error' : ''  }}">
					{{ Form::label('tgl_kembali','Tanggal Kembali') }}
					{{ Form::text('tgl_kembali','',['placeholder' => 'YYYY-MM-DD, Example : 1996-07-25','class' => 'form-control']) }}
					{{ $errors->first('', '<p class="help-block"></p>') }}
				</div>
				<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                    {{ Form::label('status', 'Status') }}
                        <select name="status" class="form-control">
                        <option value="Pinjam">Pinjam</option>
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
