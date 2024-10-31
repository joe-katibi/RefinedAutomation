<?php

namespace App\Http\Controllers;

use App\Models\Features;
use App\Models\FeatureList;
use App\Models\FeatureListMore;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{


    public function storeFeature(Request $request)
    {
        $request->validate([
            'slogan' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|integer',
            'created_by' => 'required|string',
        ]);

        Features::create($request->only('slogan', 'description', 'status', 'created_by'));
        return redirect()->route('features.index')->with('success', 'Feature created successfully.');
    }

    public function storeFeatureList(Request $request)
    {
        $request->validate([
            'features_id' => 'required|exists:features,id',
            'image' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|integer',
            'created_by' => 'required|string',
        ]);

        FeatureList::create($request->only('features_id', 'image', 'name', 'description', 'status', 'created_by'));
        return redirect()->route('features.index')->with('success', 'Feature category created successfully.');
    }

    public function storeFeatureListMore(Request $request)
    {
        $request->validate([
            'features_list_id' => 'required|exists:features_list,id',
            'image' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'status' => 'required|integer',
            'created_by' => 'required|string',
        ]);

        FeatureListMore::create($request->only('features_list_id', 'image', 'title', 'sub_title', 'status', 'created_by'));
        return redirect()->route('features.index')->with('success', 'Feature subcategory created successfully.');
    }

    public function editFeature($id)
    {
        $feature = Features::findOrFail($id);
        return view('features.edit', compact('feature'));
    }

    public function updateFeature(Request $request, $id)
    {
        $request->validate([
            'slogan' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|integer',
        ]);

        $feature = Features::findOrFail($id);
        $feature->update($request->only('slogan', 'description', 'status'));
        return redirect()->route('features.index')->with('success', 'Feature updated successfully.');
    }

    public function inactivateFeature($id)
    {
        $feature = Features::findOrFail($id);
        $feature->update(['status' => 0]); // Assuming status 0 means inactive
        return redirect()->route('features.index')->with('success', 'Feature inactivated successfully.');
    }

    public function editFeatureList($id)
    {
        $featureList = FeatureList::findOrFail($id);
        return view('features.edit_list', compact('featureList'));
    }

    public function updateFeatureList(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|integer',
        ]);

        $featureList = FeatureList::findOrFail($id);
        $featureList->update($request->only('image', 'name', 'description', 'status'));
        return redirect()->route('features.index')->with('success', 'Feature category updated successfully.');
    }

    public function inactivateFeatureList($id)
    {
        $featureList = FeatureList::findOrFail($id);
        $featureList->update(['status' => 0]); // Assuming status 0 means inactive
        return redirect()->route('features.index')->with('success', 'Feature category inactivated successfully.');
    }

    public function editFeatureListMore($id)
    {
        $featureListMore = FeatureListMore::findOrFail($id);
        return view('features.edit_list_more', compact('featureListMore'));
    }

    public function updateFeatureListMore(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'status' => 'required|integer',
        ]);

        $featureListMore = FeatureListMore::findOrFail($id);
        $featureListMore->update($request->only('image', 'title', 'sub_title', 'status'));
        return redirect()->route('features.index')->with('success', 'Feature subcategory updated successfully.');
    }

    public function inactivateFeatureListMore($id)
    {
        $featureListMore = FeatureListMore::findOrFail($id);
        $featureListMore->update(['status' => 0]); // Assuming status 0 means inactive
        return redirect()->route('features.index')->with('success', 'Feature subcategory inactivated successfully.');
    }
}
