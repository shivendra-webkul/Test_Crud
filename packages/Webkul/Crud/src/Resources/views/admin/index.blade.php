@extends('admin::layouts.content')

@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>Students</h1>
            </div>

            <div class="page-action">
                
            </div>
        </div>

        <div class="page-content">
            
            <datagrid-plus src="{{ route('admin.crud.index') }}"></datagrid-plus>
        </div>
    </div>
@stop

