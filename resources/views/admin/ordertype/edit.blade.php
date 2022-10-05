@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.ordertype.title_singular') }}:
                    {{ trans('cruds.ordertype.fields.id') }}
                    {{ $ordertype->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('ordertype.edit', [$ordertype])
        </div>
    </div>
</div>
@endsection