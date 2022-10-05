<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Declaration;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeclarationController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('declaration_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.declaration.index');
    }

    public function create()
    {
        abort_if(Gate::denies('declaration_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.declaration.create');
    }

    public function edit(Declaration $declaration)
    {
        abort_if(Gate::denies('declaration_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.declaration.edit', compact('declaration'));
    }

    public function show(Declaration $declaration)
    {
        abort_if(Gate::denies('declaration_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $declaration->load('user', 'order', 'status');

        return view('admin.declaration.show', compact('declaration'));
    }
}
