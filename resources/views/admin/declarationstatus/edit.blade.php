@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.declarationstatus.title_singular') }}:
                    {{ trans('cruds.declarationstatus.fields.id') }}
                    {{ $declarationstatus->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('declarationstatus.edit', [$declarationstatus])
        </div>
    </div>
</div>
@endsection