@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.ordertype.title_singular') }}:
                    {{ trans('cruds.ordertype.fields.id') }}
                    {{ $ordertype->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.ordertype.fields.id') }}
                            </th>
                            <td>
                                {{ $ordertype->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordertype.fields.name') }}
                            </th>
                            <td>
                                {{ $ordertype->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordertype.fields.type') }}
                            </th>
                            <td>
                                {{ $ordertype->type_label }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('ordertype_edit')
                    <a href="{{ route('admin.ordertypes.edit', $ordertype) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.ordertypes.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection