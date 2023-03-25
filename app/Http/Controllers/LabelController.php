<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLabelRequest;
use App\Http\Requests\EditLabelRequest;
use App\Models\Label;

class LabelController extends Controller
{
    public function index()
    {
        $labels = Label::paginate(15);

        return view('admin.Label.index', compact('labels'));
    }

    public function create()
    {
        return view('admin.label.create');
    }

    public function store(CreateLabelRequest $request)
    {
        Label::create($request->validated());

        return to_route('label.index')->with('success', 'Label created successfully');
    }

    public function show(Label $label)
    {
        //
    }

    public function edit(Label $label)
    {
        return view('admin.Label.edit', compact('label'));
    }

    public function update(EditLabelRequest $request, Label $label)
    {
        $label->update($request->validated());

        return to_route('label.index')->with('success', 'Label updated successfully.');
    }

    public function destroy(Label $label)
    {
        if ($label->tickets()->count()) {
            return back()->with('warning', 'Cannot delete. Label has other records.');
        }

        $label->delete();

        return to_route('label.index')->with('warning', 'Label deleted successfully');
    }
}
