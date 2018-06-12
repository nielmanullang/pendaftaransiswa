@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center" style="color: white">Pendaftaran Siswa</h1>
            <br />
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were problems with input:
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    Harap simpan akun login dibawan ini dan silahlan login dengan menggunakan akun dibawah ini:<br/>
                    <table>
                        <tr>
                            <td width="50%">NISN</td>
                            <td width="10%">:</td>
                            <td>{{$user->nisn}}</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td>{{$user->random_string}}</td>
                        </tr>
                    </table>
                    <a href="/login/" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </div>
@endsection
