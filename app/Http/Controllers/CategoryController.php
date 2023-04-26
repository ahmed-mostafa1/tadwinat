<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('blog/cats/index' , compact('categories'));
    }
    
    
    public function create()
    {
        return view('blog/cats/create');
        
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Category::create($request->all());
            session()->flash('success', ' تم إنشاء القسم ');
            return redirect()->route('cats.index');
    
    }

    public function edit(Category $category)
    {
        //
    }


    public function update(Request $request, Category $category)
    {
        //
    }


    public function destroy(Category $category)
    {
        //
    }
}
