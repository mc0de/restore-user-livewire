<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Participationstatus;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ParticipationstatusController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('participationstatus_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.participationstatus.index');
    }

    public function create()
    {
        abort_if(Gate::denies('participationstatus_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.participationstatus.create');
    }

    public function edit(Participationstatus $participationstatus)
    {
        abort_if(Gate::denies('participationstatus_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.participationstatus.edit', compact('participationstatus'));
    }

    public function show(Participationstatus $participationstatus)
    {
        abort_if(Gate::denies('participationstatus_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.participationstatus.show', compact('participationstatus'));
    }
}
