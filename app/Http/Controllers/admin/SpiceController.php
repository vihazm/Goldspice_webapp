<?php

namespace App\Http\Controllers\admin;

use App\Models\Spices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpiceController extends Controller
{
    public function Index() {
        $spices = Spices::all();
        return view('admin.spice',compact('spices'));
    }

    public function Create(Request $request) {
        $validatedData = $request->validate([
            'imagelink' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'packsize' => 'required|numeric|min:0',
            'price' => 'required|string|max:255',
        ]);

        // Store the image and get the path
        if ($request->hasFile('imagelink')) {
            $imagepath = $request->file('imagelink')->store('images', 'public');
        } else {
            return back()->withErrors(['imagelink' => 'Image upload failed.']);
        }

        // Insert into the database
        Spices::create([
            'imagelink' => $imagepath, // 🔥 USE the stored path, not the uploaded file
            'name' => $validatedData['name'],
            'packsize' => $validatedData['packsize'],
            'price' => $validatedData['price'],
        ]);

        return redirect()->back()->with('success', 'Product Added Successfully');
    }

        public function Edit($id)
        {
            $spice = Spices::findOrFail($id);
            return view('admin.edit_spice', compact('spice'));
        }

        public function Update(Request $request, $id)
        {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'packsize' => 'required|numeric|min:0',
                'price' => 'required|string|max:255',
                'imagelink' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $spice = Spices::findOrFail($id);

            if ($request->hasFile('imagelink')) {
                $imagePath = $request->file('imagelink')->store('images', 'public');
                $spice->imagelink = $imagePath;
            }

            $spice->name = $validatedData['name'];
            $spice->packsize = $validatedData['packsize'];
            $spice->price = $validatedData['price'];
            $spice->save();

            return redirect()->route('spice.index')->with('success', 'Product updated successfully');
        }

        public function Delete($id)
        {
            $spice = Spices::findOrFail($id);
            $spice->delete();
            return redirect()->back()->with('success', 'Product deleted successfully');
        }
}
