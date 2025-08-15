<?php

namespace App\Http\Controllers\admin;

use App\Models\Spices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpiceController extends Controller
{
    public function Index() {
        $spices = Spices::all();//retrieves all spice records fron db
        return view('admin.spice',compact('spices'));//passes them to spice.blade.php in admin.
    }

    public function Create(Request $request) {//creating a new spice
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
            'imagelink' => $imagepath, //  USE the stored path, not the uploaded file
            'name' => $validatedData['name'],
            'packsize' => $validatedData['packsize'],
            'price' => $validatedData['price'],
        ]);

        return redirect()->back()->with('success', 'Product Added Successfully');//revert back with successs msg
    }

        public function Edit($id)//finds spice by id and allows edit
        {
            $spice = Spices::findOrFail($id);
            return view('admin.edit_spice', compact('spice'));
        }

        public function Update(Request $request, $id)
        {
            $validatedData = $request->validate([//validates the data 
                'name' => 'required|string|max:255',
                'packsize' => 'required|numeric|min:0',
                'price' => 'required|string|max:255',
                'imagelink' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $spice = Spices::findOrFail($id);//finds spice by id

            if ($request->hasFile('imagelink')) {//if new image is added, path is replaces
                $imagePath = $request->file('imagelink')->store('images', 'public');
                $spice->imagelink = $imagePath;
            }
            //updating the other fields 
            $spice->name = $validatedData['name'];
            $spice->packsize = $validatedData['packsize'];
            $spice->price = $validatedData['price'];
            $spice->save();

            return redirect()->route('spice.index')->with('success', 'Product updated successfully');//redirects with success msg
        }

        public function Delete($id)
        {
            $spice = Spices::findOrFail($id);//finds spice or gives a 404
            $spice->delete();
            return redirect()->back()->with('success', 'Product deleted successfully');
        }
}
