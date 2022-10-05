<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competence;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CompetenceController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('competence_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.competence.index');
    }

    public function create()
    {
        abort_if(Gate::denies('competence_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.competence.create');
    }

    public function edit(Competence $competence)
    {
        abort_if(Gate::denies('competence_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.competence.edit', compact('competence'));
    }

    public function show(Competence $competence)
    {
        abort_if(Gate::denies('competence_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.competence.show', compact('competence'));
    }
}
