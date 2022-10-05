@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.ordercompetence.title_singular') }}:
                    {{ trans('cruds.ordercompetence.fields.id') }}
                    {{ $ordercompetence->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.ordercompetence.fields.id') }}
                            </th>
                            <td>
                                {{ $ordercompetence->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordercompetence.fields.order') }}
                            </th>
                            <td>
                                @if($ordercompetence->order)
                                    <span class="badge badge-relationship">{{ $ordercompetence->order->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordercompetence.fields.competence') }}
                            </th>
                            <td>
                                @if($ordercompetence->competence)
                                    <span class="badge badge-relationship">{{ $ordercompetence->competence->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ordercompetence.fields.number') }}
                            </th>
                            <td>
                                {{ $ordercompetence->number }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('ordercompetence_edit')
                    <a href="{{ route('admin.ordercompetences.edit', $ordercompetence) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.ordercompetences.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection