@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.competence.title_singular') }}:
                    {{ trans('cruds.competence.fields.id') }}
                    {{ $competence->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('competence.edit', [$competence])
        </div>
    </div>
</div>
@endsection