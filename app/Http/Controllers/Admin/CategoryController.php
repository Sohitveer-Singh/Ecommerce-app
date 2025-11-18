<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreListingCategoryRequest;
use App\Models\ListingCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ListingCategory::where('status', 1)->get();

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreListingCategoryRequest $request)
    {
        $validated = $request->validated();

        // 1. Store the image
        if ($request->hasFile('image')) {
            // 'path' will be like 'category_images/filename.jpg'
            $path = $request->file('image')->store('category_images', 'public');
            $validated['image'] = $path;
        }

        // 2. Create the category
        ListingCategory::create($validated);

        return redirect()->back()
            ->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
