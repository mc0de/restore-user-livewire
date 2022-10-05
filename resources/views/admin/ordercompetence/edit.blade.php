@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.ordercompetence.title_singular') }}:
                    {{ trans('cruds.ordercompetence.fields.id') }}
                    {{ $ordercompetence->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('ordercompetence.edit', [$ordercompetence])
        </div>
    </div>
</div>
@endsection