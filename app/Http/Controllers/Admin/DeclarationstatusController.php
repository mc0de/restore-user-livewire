<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Declarationstatus;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeclarationstatusController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('declarationstatus_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.declarationstatus.index');
    }

    public function create()
    {
        abort_if(Gate::denies('declarationstatus_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.declarationstatus.create');
    }

    public function edit(Declarationstatus $declarationstatus)
    {
        abort_if(Gate::denies('declarationstatus_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.declarationstatus.edit', compact('declarationstatus'));
    }

    public function show(Declarationstatus $declarationstatus)
    {
        abort_if(Gate::denies('declarationstatus_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.declarationstatus.show', compact('declarationstatus'));
    }
}
