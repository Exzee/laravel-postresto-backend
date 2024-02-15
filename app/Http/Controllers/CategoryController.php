<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('pages.categories.index', compact('categories'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('pages.categories.create', compact('categories'));
    }


    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        //proses
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();


        //save image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/categories', $category->id . '.' . $image->getClientOriginalExtension());
            $category->image = 'storage/categories/' . $category->id . '.' . $image->getClientOriginalExtension();
            $category->save();
        }

        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }


    public function edit($id)
    {
        $category = Category::findorfail($id);
        $categories = Category::all();
        return view('pages.categories.edit', compact('categories', 'category'));
    }


    public function update(Request $request, $id)
    {
        //validasi
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        //proses
        $category = Category::Find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();


        //save image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/categories', $category->id . '.' . $image->getClientOriginalExtension());
            $category->image = 'storage/categories/' . $category->id . '.' . $image->getClientOriginalExtension();
            $category->save();
        }

        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category Deleted successfully');
    }
}
