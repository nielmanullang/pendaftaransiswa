@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.results.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.list')
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($results) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th>@lang('quickadmin.results.fields.date')</th>
                        <th>Result</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($results) > 0)
                        <tr>
                            <td>{{ $results->created_at or '' }}</td>
                            <td>{{ $results->result }}/{{$count}}={{ number_format($results->result  / $count *100,2) }}</td>
                            <td>
                                <a href="{{ route('results.show',[$results->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a>
                            </td>
                        </tr>
                    @else
                        <tr>
                            <td colspan="6">@lang('quickadmin.no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop
