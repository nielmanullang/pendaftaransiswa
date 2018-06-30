@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.artikels.title')</h3>
    @if(Auth::user() != null)
    @if (Auth::user()->isAdmin())
    <p>
        <a href="{{ route('artikels.create') }}" class="btn btn-success">@lang('quickadmin.add_new')</a>
    </p>
    @endif
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.list')
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($artikels) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>@lang('quickadmin.artikels.fields.title')</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($artikels) > 0)
                        @foreach ($artikels as $artikel)
                            <tr data-entry-id="{{ $artikel->id }}">
                                <td></td>
                                <td>{{ $artikel->title }}</td>
                                <td>
                                    <a href="{{ route('artikels.show',[$artikel->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a>
                                    @if(Auth::user() != null)
                                    @if (Auth::user()->isAdmin())
                                        <a href="{{ route('artikels.edit',[$artikel->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.edit')</a>
                                        {!! Form::open(array(
                                            'style' => 'display: inline-block;',
                                            'method' => 'DELETE',
                                            'onsubmit' => "return confirm('".trans("quickadmin.are_you_sure")."');",
                                            'route' => ['artikels.destroy', $artikel->id])) !!}
                                        {!! Form::submit(trans('quickadmin.delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                        {!! Form::close() !!}
                                    @endif
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">@lang('quickadmin.no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop
@if(Auth::user() != null)
@if (Auth::user()->isAdmin())
@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('artikels.mass_destroy') }}';
    </script>
@endsection
@endif
@endif