<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePriorityRequest;
use App\Http\Requests\EditPriorityRequest;
use App\Models\Priority;

class PriorityController extends Controller
{
    public function index()
    {
        $priorities = Priority::paginate(15);

        return view('admin.priority.index', compact('priorities'));
    }

    public function create()
    {
        return view('admin.priority.create');
    }

    public function store(CreatePriorityRequest $request)
    {
        $priority = Priority::create($request->validated());

        return redirect()->route('priority.index')->with('success', 'New '. $priority->priority .' was added successfully');
    }

    public function show(Priority $priority)
    {
        abort(404);
    }

    public function edit(Priority $priority)
    {
        return view('admin.priority.edit', compact('priority'));
    }

    public function update(EditPriorityRequest $request, Priority $priority)
    {
        $priority->update($request->validated());

        return redirect()->route('priority.index')->with('success', $priority->priority .' was updated sucessfully');
    }

    public function destroy(Priority $priority)
    {
        $priority->delete();

        return redirect()->route('priority.index')->with('warning', 'Priority '. $priority->priority.' was successfully deleted');
    }
}
