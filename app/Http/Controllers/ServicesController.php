<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\ServiceList;
use App\Models\ServiceListMore;

class ServicesController extends Controller
{
    public function storeService(Request $request)
    {
        $request->validate([
            'slogan' => 'required|string',
            'description' => 'required|string',
        ]);

        Services::create($request->all());
        return redirect()->route('admin.service')->with('success', 'Service created successfully.');
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        ServiceList::create($request->all());
        return redirect()->route('admin.service')->with('success', 'Category created successfully.');
    }

    public function activateService($id)
    {
        $service = Services::findOrFail($id);
        $service->update(['status' => 1]);

        return redirect()->route('admin.service')->with('success', 'Service activated successfully.');
    }

    // Function to show the edit form for a Service
    public function editService($id)
    {
        $service = Services::findOrFail($id);
        return view('services.edit', compact('service'));
    }

    // Function to update a Service
    public function updateService(Request $request, $id)
    {
        $request->validate([
            'slogan' => 'required|string',
            'description' => 'required|string',
        ]);

        $service = Services::findOrFail($id);
        $service->update($request->all());

        return redirect()->route('admin.service')->with('success', 'Service updated successfully.');
    }

    // Function to show the edit form for a Category
    public function editCategory($id)
    {
        $category = ServiceList::findOrFail($id);
        return view('services.editCategory', compact('category'));
    }

    // Function to update a Category
    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $category = ServiceList::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('admin.service')->with('success', 'Category updated successfully.');
    }
    public function createSubcategory($categoryId)
    {
      $category = Category::findOrFail($categoryId);
       return view('subcategory.create', compact('category'));
    }
}
