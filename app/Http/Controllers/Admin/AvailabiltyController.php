<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Availabilty;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AvailabiltyController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('availabilty_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.availabilty.index');
    }

    public function create()
    {
        abort_if(Gate::denies('availabilty_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.availabilty.create');
    }

    public function edit(Availabilty $availabilty)
    {
        abort_if(Gate::denies('availabilty_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.availabilty.edit', compact('availabilty'));
    }

    public function show(Availabilty $availabilty)
    {
        abort_if(Gate::denies('availabilty_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $availabilty->load('user');

        return view('admin.availabilty.show', compact('availabilty'));
    }
}
