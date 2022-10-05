<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orderparticipation;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderparticipationController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('orderparticipation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.orderparticipation.index');
    }

    public function create()
    {
        abort_if(Gate::denies('orderparticipation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.orderparticipation.create');
    }

    public function edit(Orderparticipation $orderparticipation)
    {
        abort_if(Gate::denies('orderparticipation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.orderparticipation.edit', compact('orderparticipation'));
    }

    public function show(Orderparticipation $orderparticipation)
    {
        abort_if(Gate::denies('orderparticipation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderparticipation->load('order', 'user', 'status');

        return view('admin.orderparticipation.show', compact('orderparticipation'));
    }
}
