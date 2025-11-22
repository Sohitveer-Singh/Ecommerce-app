<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\ListingProduct;

class ProductController extends Controller
{
    public function index(Listing $listing)
    {
//        $products = $listing->products;
        $products = $listing->products()->latest()->get();

        return view('listing.products.index', compact('listing', 'products'));
    }

//    public function create(Listing $listing)
//    {
//        return view('listing.products.create', compact('listing'));
//    }

    public function store(Request $request, Listing $listing)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'photo' => 'required|image',
            'status' => 'required|boolean',
        ]);

        // Upload image
        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('products', 'public');
        }

        $listing->products()->create($validated);

        return back()->with('success', 'Product added');
    }

    public function edit(Listing $listing, ListingProduct $product)
    {
        return view('listing.products.edit', compact('listing', 'product'));
    }

    public function update(Request $request, Listing $listing, ListingProduct $product)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'price' => 'nullable|numeric',
            'description' => 'nullable|string',
            'photo' => 'nullable|string',
        ]);

        $product->update($validated);

        return back()->with('success', 'Product updated');
    }

    public function destroy(Listing $listing, ListingProduct $product)
    {
        $product->delete();

        return back()->with('success', 'Product deleted');
    }
}
