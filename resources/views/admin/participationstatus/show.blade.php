@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.participationstatus.title_singular') }}:
                    {{ trans('cruds.participationstatus.fields.id') }}
                    {{ $participationstatus->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.participationstatus.fields.id') }}
                            </th>
                            <td>
                                {{ $participationstatus->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.participationstatus.fields.name') }}
                            </th>
                            <td>
                                {{ $participationstatus->name }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('participationstatus_edit')
                    <a href="{{ route('admin.participationstatuses.edit', $participationstatus) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.participationstatuses.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection