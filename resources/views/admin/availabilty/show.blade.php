@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.availabilty.title_singular') }}:
                    {{ trans('cruds.availabilty.fields.id') }}
                    {{ $availabilty->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.availabilty.fields.id') }}
                            </th>
                            <td>
                                {{ $availabilty->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.availabilty.fields.user') }}
                            </th>
                            <td>
                                @if($availabilty->user)
                                    <span class="badge badge-relationship">{{ $availabilty->user->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.availabilty.fields.type') }}
                            </th>
                            <td>
                                {{ $availabilty->type_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.availabilty.fields.date') }}
                            </th>
                            <td>
                                {{ $availabilty->date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.availabilty.fields.start_time') }}
                            </th>
                            <td>
                                {{ $availabilty->start_time }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.availabilty.fields.end_time') }}
                            </th>
                            <td>
                                {{ $availabilty->end_time }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('availabilty_edit')
                    <a href="{{ route('admin.availabilties.edit', $availabilty) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.availabilties.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection