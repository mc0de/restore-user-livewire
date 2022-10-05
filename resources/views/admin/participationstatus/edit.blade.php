@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.participationstatus.title_singular') }}:
                    {{ trans('cruds.participationstatus.fields.id') }}
                    {{ $participationstatus->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('participationstatus.edit', [$participationstatus])
        </div>
    </div>
</div>
@endsection