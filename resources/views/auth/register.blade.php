@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                <form method="get" action="/home/">
                    <button type="submit" class="btn btn-success">Back to Home</button>
                </form>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('namalengkap') ? ' has-error' : '' }}">
                            <label for="namalengkap" class="col-md-4 control-label">Nama Lengkap</label>

                            <div class="col-md-6">
                                <input id="namalengkap" type="text" class="form-control" name="namalengkap" value="{{ old('namalengkap') }}" required autofocus>

                                @if ($errors->has('namalengkap'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namalengkap') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jeniskelamin') ? ' has-error' : '' }}">
                            <label for="jeniskelamin" class="col-md-4 control-label">Jenis Kelamin</label>

                            <div class="col-md-6">
                                <select name="jeniskelamin" required=>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>


                                @if ($errors->has('jeniskelamin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jeniskelamin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tempatlahir') ? ' has-error' : '' }}">
                            <label for="tempatlahir" class="col-md-4 control-label">Tempat Lahir</label>

                            <div class="col-md-6">
                                <input id="tempatlahir" type="text" class="form-control" name="tempatlahir" value="{{ old('tempatlahir') }}" required autofocus>

                                @if ($errors->has('tempatlahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempatlahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tanggallahir') ? ' has-error' : '' }}">
                            <label for="tanggallahir" class="col-md-4 control-label">Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input id="tanggallahir" type="date" class="form-control" name="tanggallahir" value="{{ old('tanggallahir') }}" required autofocus>

                                @if ($errors->has('tanggallahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tanggallahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" required autofocus>

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('notelpon') ? ' has-error' : '' }}">
                            <label for="notelpon" class="col-md-4 control-label">No. Telpon</label>

                            <div class="col-md-6">
                                <input id="notelpon" type="number" class="form-control" name="notelpon" value="{{ old('notelpon') }}" required autofocus>

                                @if ($errors->has('notelpon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('notelpon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('asalsekolah') ? ' has-error' : '' }}">
                            <label for="asalsekolah" class="col-md-4 control-label">Asal Sekolah</label>

                            <div class="col-md-6">
                                <input id="asalsekolah" type="text" class="form-control" name="asalsekolah" value="{{ old('asalsekolah') }}" required autofocus>

                                @if ($errors->has('asalsekolah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asalsekolah') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nisn') ? ' has-error' : '' }}">
                            <label for="nisn" class="col-md-4 control-label">NISN</label>

                            <div class="col-md-6">
                                <input id="nisn" type="number" class="form-control" name="nisn" value="{{ old('nisn') }}" required autofocus maxlength="10">

                                @if ($errors->has('nisn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nisn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('niksiswa') ? ' has-error' : '' }}">
                            <label for="niksiswa" class="col-md-4 control-label">NIK Siswa</label>

                            <div class="col-md-6">
                                <input id="niksiswa" type="number" class="form-control" name="niksiswa" value="{{ old('niksiswa') }}" required autofocus maxlength="16">

                                @if ($errors->has('niksiswa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('niksiswa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nikayah') ? ' has-error' : '' }}">
                            <label for="nikayah" class="col-md-4 control-label">NIK Ayah</label>

                            <div class="col-md-6">
                                <input id="nikayah" type="number" class="form-control" name="nikayah" value="{{ old('nikayah') }}" required autofocus maxlength="16">

                                @if ($errors->has('nikayah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nikayah') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nikibu') ? ' has-error' : '' }}">
                            <label for="nikibu" class="col-md-4 control-label">NIK Ibu</label>

                            <div class="col-md-6">
                                <input id="nikibu" type="number" class="form-control" name="nikibu" value="{{ old('nikibu') }}" required autofocus maxlength="16">

                                @if ($errors->has('nikibu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nikibu') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ijazah') ? ' has-error' : '' }}">
                            <label for="ijazah" class="col-md-4 control-label">Ijazah</label>

                            <div class="col-md-6">
                                <input id="ijazah" type="file" class="form-control" name="ijazah" value="{{ old('ijazah') }}" accept="image/x-png,image/gif,image/jpeg" required>

                                @if ($errors->has('ijazah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ijazah') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('kartukeluarga') ? ' has-error' : '' }}">
                            <label for="kartukeluarga" class="col-md-4 control-label">Kartu Keluarga</label>

                            <div class="col-md-6">
                                <input id="kartukeluarga" type="file" class="form-control" name="kartukeluarga" value="{{ old('kartukeluarga') }}" accept="image/x-png,image/gif,image/jpeg" required>

                                @if ($errors->has('kartukeluarga'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kartukeluarga') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
