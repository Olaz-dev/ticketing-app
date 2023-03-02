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
        $labels = Label::all();

        return view('admin.label.create', $labels);
    }

    public function store(CreateLabelRequest $request)
    {
        Label::create($request->validated());

        return redirect()->route('label.index')->with('success', 'Label created successfully');
    }

    public function show(Label $label)
    {
        abort(404);
    }

    public function edit(Label $label)
    {
        return view('admin.Label.edit', compact('label'));
    }

    public function update(EditLabelRequest $request, Label $label)
    {
        $label->update($request->validated());

        return redirect()->route('label.index')->with('success', 'Update was successful');
    }

    public function destroy(Label $label)
    {
        $label->delete();

        return redirect()->route('label.index')->with('warning', 'Deleted Successfully');
    }
}
