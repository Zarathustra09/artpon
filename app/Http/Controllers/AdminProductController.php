<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.product', compact('services'));
    }

    public function dataTable()
    {
        $data = Product::with('service')->get();
        return response()->json(['data' => $data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'min_price' => 'required|numeric',
            'max_price' => 'required|numeric',
            'service_id' => 'required|exists:services,id',
            'stock' => 'required|integer'
        ]);

        Product::create($request->all());

        return response()->json(['success' => 'Product added successfully']);
    }

    public function edit($id)
    {
        $product = Product::with('service')->findOrFail($id);
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'min_price' => 'required|numeric',
            'max_price' => 'required|numeric',
            'service_id' => 'required|exists:services,id',
            'stock' => 'required|integer'
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json(['success' => 'Product updated successfully']);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(['success' => 'Product deleted successfully']);
    }
}
