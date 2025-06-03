<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::all();
        return view('Admin/Categories', compact('categories'));
    }

    public function createCategory(){
        return view('Admin/CategoryCreate');
    }


    public function storeCategory(Request $request){
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'  
        ]);

       
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories', 'public');
            $validatedData['image'] = $imagePath;
        }


        Category::create($validatedData);

    
        return redirect()->route('categories')
                         ->with('success', 'Category created successfully!');
    }
}