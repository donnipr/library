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
                    {{ Form::model($anggotas, ['route'=>['anggota.update', $anggotas->id], 'method'=>'PATCH']) }}
                        <div class="form-group{{ $errors->has('nis') ? ' has-error' : '' }}">
                            {{ Form::label('nis', 'Nis') }}
                            {{ Form::text('nis', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Nis']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            {{ Form::label('nama', 'Nama') }}
                            {{ Form::text('nama', null, ['class'=>'form-control', 'placeholder'=>'Masukkan nama']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('kelas') ? ' has-error' : '' }}">
                            {{ Form::label('kelas', 'Kelas') }}
                            <select name="kelas" class="form-control">
                                @if($anggotas->kelas == '7A')
                                <option value="7A">7A</option>
                                <option value="7B">7B</option>
                                <option value="7C">7C</option>
                                <option value="8A">8A</option>
                                <option value="8B">8B</option>
                                <option value="8C">8C</option>
                                <option value="9A">9A</option>
                                <option value="9B">9B</option>
                                <option value="9C">9C</option>
                                @elseif($anggotas->kelas == '7B')
                                <option value="7B">7B</option>
                                <option value="7A">7A</option>
                                <option value="7C">7C</option>
                                <option value="8A">8A</option>
                                <option value="8B">8B</option>
                                <option value="8C">8C</option>
                                <option value="9A">9A</option>
                                <option value="9B">9B</option>
                                <option value="9C">9C</option>
                                @elseif($anggotas->kelas == '7C')
                                <option value="7C">7C</option>
                                <option value="7A">7A</option>
                                <option value="7B">7B</option> 
                                <option value="8A">8A</option>
                                <option value="8B">8B</option>
                                <option value="8C">8C</option>
                                <option value="9A">9A</option>
                                <option value="9B">9B</option>
                                <option value="9C">9C</option>
                                @elseif($anggotas->kelas == '7C')
                                <option value="7C">7C</option>
                                <option value="7B">7B</option>
                                <option value="7A">7A</option>
                                <option value="8A">8A</option>
                                <option value="8B">8B</option>
                                <option value="8C">8C</option>
                                <option value="9A">9A</option>
                                <option value="9B">9B</option>
                                <option value="9C">9C</option>
                                @elseif($anggotas->kelas == '8A')
                                <option value="8A">8A</option>
                                <option value="7A">7A</option>
                                <option value="7B">7B</option>
                                <option value="7C">7C</option>
                                <option value="8B">8B</option>
                                <option value="8C">8C</option>
                                <option value="9A">9A</option>
                                <option value="9B">9B</option>
                                <option value="9C">9C</option>
                                @elseif($anggotas->kelas == '8B')
                                <option value="8B">8B</option>
                                <option value="7A">7A</option>
                                <option value="7B">7B</option>
                                <option value="7C">7C</option>
                                <option value="8A">8A</option>
                                <option value="8C">8C</option>
                                <option value="9A">9A</option>
                                <option value="9B">9B</option>
                                <option value="9C">9C</option>
                                @elseif($anggotas->kelas == '8C')
                                <option value="8C">8C</option>
                                <option value="7A">7A</option>
                                <option value="7B">7B</option>
                                <option value="7C">7C</option>
                                <option value="8A">8A</option>
                                <option value="8B">8B</option>                                
                                <option value="9A">9A</option>
                                <option value="9B">9B</option>
                                <option value="9C">9C</option>
                                @elseif($anggotas->kelas == '9A')
                                <option value="9A">9A</option>
                                <option value="7A">7A</option>
                                <option value="7B">7B</option>
                                <option value="7C">7C</option>
                                <option value="8A">8A</option>
                                <option value="8B">8B</option>
                                <option value="8C">8C</option>
                                <option value="9B">9B</option>
                                <option value="9C">9C</option>
                                @elseif($anggotas->kelas == '9B')
                                <option value="9B">9B</option>
                                <option value="7A">7A</option>
                                <option value="7B">7B</option>
                                <option value="7C">7C</option>
                                <option value="8A">8A</option>
                                <option value="8B">8B</option>
                                <option value="8C">8C</option>
                                <option value="9A">9A</option>                               
                                <option value="9C">9C</option>
                                @elseif($anggotas->kelas == '9C')
                                <option value="9C">9C</option>
                                <option value="7A">7A</option>
                                <option value="7B">7B</option>
                                <option value="7C">7C</option>
                                <option value="8A">8A</option>
                                <option value="8B">8B</option>
                                <option value="8C">8C</option>
                                <option value="9A">9A</option>
                                <option value="9B">9B</option>
                                @endif
                            </select>
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                            {{ Form::label('sex', 'Jenis Kelamin') }}
                            <select name="sex" class="form-control">
                                @if($anggotas->sex == 'Laki - Laki')
                                <option value="Laki - Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                                @else
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki - Laki">Laki - Laki</option>
                                @endif
                            </select>
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
                            {{ Form::submit('Ubah', ['class'=>'btn btn-info']) }}
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection