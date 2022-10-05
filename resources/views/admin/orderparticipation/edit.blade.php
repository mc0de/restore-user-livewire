@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.orderparticipation.title_singular') }}:
                    {{ trans('cruds.orderparticipation.fields.id') }}
                    {{ $orderparticipation->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('orderparticipation.edit', [$orderparticipation])
        </div>
    </div>
</div>
@endsection