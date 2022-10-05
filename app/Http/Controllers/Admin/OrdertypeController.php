<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ordertype;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrdertypeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ordertype_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ordertype.index');
    }

    public function create()
    {
        abort_if(Gate::denies('ordertype_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ordertype.create');
    }

    public function edit(Ordertype $ordertype)
    {
        abort_if(Gate::denies('ordertype_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ordertype.edit', compact('ordertype'));
    }

    public function show(Ordertype $ordertype)
    {
        abort_if(Gate::denies('ordertype_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ordertype.show', compact('ordertype'));
    }
}
