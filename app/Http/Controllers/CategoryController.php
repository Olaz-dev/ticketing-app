<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(15);

        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        category::create($request->validated());

        return redirect()->route('category.index')->with('success', 'category created!');
    }

    public function show(Category $category)
    {
        $category = Category::find($category);

        return view('admin.category.edit', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.Category.edit', compact('category'));
    }

    public function update(EditCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()->route('category.index')->with('success', "$category->name".' edited successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index')->with('warning', 'Deleted Successfully');
    }
}
