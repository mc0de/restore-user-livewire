@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.orderparticipation.title_singular') }}:
                    {{ trans('cruds.orderparticipation.fields.id') }}
                    {{ $orderparticipation->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.orderparticipation.fields.id') }}
                            </th>
                            <td>
                                {{ $orderparticipation->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.orderparticipation.fields.order') }}
                            </th>
                            <td>
                                @if($orderparticipation->order)
                                    <span class="badge badge-relationship">{{ $orderparticipation->order->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.orderparticipation.fields.user') }}
                            </th>
                            <td>
                                @if($orderparticipation->user)
                                    <span class="badge badge-relationship">{{ $orderparticipation->user->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.orderparticipation.fields.status') }}
                            </th>
                            <td>
                                @if($orderparticipation->status)
                                    <span class="badge badge-relationship">{{ $orderparticipation->status->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('orderparticipation_edit')
                    <a href="{{ route('admin.orderparticipations.edit', $orderparticipation) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.orderparticipations.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection