@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.artikels.title')</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.view')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.artikels.fields.title')</th>
                            <td>{{ $artikel->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.artikels.fields.isi')</th>
                            <td>{{ $artikel->content }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('artikels.index') }}" class="btn btn-default">@lang('quickadmin.back_to_list')</a>
        </div>
    </div>
@stop