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
                    Silahlan login dengan:<br/>
                    No. Telpon: {{$user->notelpon}}<br/>
                    Password: {{$user->nisn}}{{$user->random_string}}<br/>
                    <a href="/login/" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </div>
@endsection
