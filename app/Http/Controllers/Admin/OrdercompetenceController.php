<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ordercompetence;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrdercompetenceController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ordercompetence_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ordercompetence.index');
    }

    public function create()
    {
        abort_if(Gate::denies('ordercompetence_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ordercompetence.create');
    }

    public function edit(Ordercompetence $ordercompetence)
    {
        abort_if(Gate::denies('ordercompetence_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ordercompetence.edit', compact('ordercompetence'));
    }

    public function show(Ordercompetence $ordercompetence)
    {
        abort_if(Gate::denies('ordercompetence_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ordercompetence->load('order', 'competence');

        return view('admin.ordercompetence.show', compact('ordercompetence'));
    }
}
