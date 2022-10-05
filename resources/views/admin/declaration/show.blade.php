@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.declaration.title_singular') }}:
                    {{ trans('cruds.declaration.fields.id') }}
                    {{ $declaration->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.declaration.fields.id') }}
                            </th>
                            <td>
                                {{ $declaration->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.declaration.fields.user') }}
                            </th>
                            <td>
                                @if($declaration->user)
                                    <span class="badge badge-relationship">{{ $declaration->user->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.declaration.fields.order') }}
                            </th>
                            <td>
                                @if($declaration->order)
                                    <span class="badge badge-relationship">{{ $declaration->order->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.declaration.fields.user_start_time') }}
                            </th>
                            <td>
                                {{ $declaration->user_start_time }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.declaration.fields.user_end_time') }}
                            </th>
                            <td>
                                {{ $declaration->user_end_time }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.declaration.fields.kilometers') }}
                            </th>
                            <td>
                                {{ $declaration->kilometers }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.declaration.fields.status') }}
                            </th>
                            <td>
                                @if($declaration->status)
                                    <span class="badge badge-relationship">{{ $declaration->status->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('declaration_edit')
                    <a href="{{ route('admin.declarations.edit', $declaration) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.declarations.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection