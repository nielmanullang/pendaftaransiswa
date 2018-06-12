@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.view')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.users.fields.nisn')</th>
                            <td>{{ $user->nisn }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.namalengkap')</th>
                            <td>{{ $user->namalengkap }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.username')</th>
                            <td>{{ $user->username }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.jeniskelamin')</th>
                            <td>{{ $user->jeniskelamin }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.tempatlahir')</th>
                            <td>{{ $user->tempatlahir }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.tanggallahir')</th>
                            <td>{{ $user->tanggallahir }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.alamat')</th>
                            <td>{{ $user->alamat }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.notelpon')</th>
                            <td>{{ $user->notelpon }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.asalsekolah')</th>
                            <td>{{ $user->asalsekolah }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.password')</th>
                            <td>{{ $user->random_string }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.niksiswa')</th>
                            <td>{{ $user->niksiswa }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.nikayah')</th>
                            <td>{{ $user->nikayah }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.nikibu')</th>
                            <td>{{ $user->nikibu }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.kartukeluarga')</th>
                            <td><img src="/uploads/kartukeluarga/{{ $user->kartukeluarga }}" height="50px" width="50px" /></td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.ijazah')</th>
                            <td><img src="/uploads/ijazah/{{ $user->ijazah }}" height="50px" width="50px" /></td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('users.index') }}" class="btn btn-default">@lang('quickadmin.back_to_list')</a>
        </div>
    </div>
@stop