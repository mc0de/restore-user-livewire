@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.availabilty.title_singular') }}:
                    {{ trans('cruds.availabilty.fields.id') }}
                    {{ $availabilty->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('availabilty.edit', [$availabilty])
        </div>
    </div>
</div>
@endsection