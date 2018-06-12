@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>
    
    {!! Form::model($user, ['method' => 'PUT', 'route' => ['users.update', $user->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('namalengkap', 'Nama Lengkap*', ['class' => 'control-label']) !!}
                    {!! Form::text('namalengkap', old('namalengkap'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('namalengkap'))
                        <p class="help-block">
                            {{ $errors->first('namalengkap') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('username', 'Username*', ['class' => 'control-label']) !!}
                    {!! Form::text('username', old('username'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('username'))
                        <p class="help-block">
                            {{ $errors->first('username') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('jeniskelamin', 'Jenis Kelamin*', ['class' => 'control-label']) !!}
                    {!! Form::text('jeniskelamin', old('jeniskelamin'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('jeniskelamin'))
                        <p class="help-block">
                            {{ $errors->first('jeniskelamin') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tempatlahir', 'Tempat Lahir*', ['class' => 'control-label']) !!}
                    {!! Form::text('tempatlahir', old('tempatlahir'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tempatlahir'))
                        <p class="help-block">
                            {{ $errors->first('tempatlahir') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tanggallahir', 'Tanggal Lahir*', ['class' => 'control-label']) !!}
                    {!! Form::text('tanggallahir', old('tanggallahir'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tanggallahir'))
                        <p class="help-block">
                            {{ $errors->first('tanggallahir') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('alamat', 'Alamat', ['class' => 'control-label']) !!}
                    {!! Form::text('alamat', old('alamat'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('alamat'))
                        <p class="help-block">
                            {{ $errors->first('alamat') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('notelpon', 'No. Telpon', ['class' => 'control-label']) !!}
                    {!! Form::text('notelpon', old('notelpon'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('notelpon'))
                        <p class="help-block">
                            {{ $errors->first('notelpon') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('asalsekolah', 'Asal Sekolah', ['class' => 'control-label']) !!}
                    {!! Form::text('asalsekolah', old('asalsekolah'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('asalsekolah'))
                        <p class="help-block">
                            {{ $errors->first('asalsekolah') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('niksiswa', 'NIK Siswa', ['class' => 'control-label']) !!}
                    {!! Form::text('niksiswa', old('asalsekolah'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('niksiswa'))
                        <p class="help-block">
                            {{ $errors->first('niksiswa') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nikayah', 'NIK Ayah', ['class' => 'control-label']) !!}
                    {!! Form::text('nikayah', old('asalsekolah'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nikayah'))
                        <p class="help-block">
                            {{ $errors->first('nikayah') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nikibu', 'NIK Ibu', ['class' => 'control-label']) !!}
                    {!! Form::text('nikibu', old('asalsekolah'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nikibu'))
                        <p class="help-block">
                            {{ $errors->first('nikibu') }}
                        </p>
                    @endif
                </div>
            </div>

        </div>
    </div>

    {!! Form::submit(trans('quickadmin.update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

