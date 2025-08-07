<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('adminDashboard.testimonial.index',compact('testimonials'));
    }

    public function add()
    {
        return view('adminDashboard.testimonial.add');
    }


    public function store(Request $request)
    {
     
        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png,webp|max:2048',
            'name' => 'required|max:255',
            'designation' => 'nullable|max:255',
            'feedback' => 'nullable|max:255',
            'order' => 'required|numeric',
            'status' => 'required'

        ]);

        $testimonial = new Testimonial();

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $extension = $img->getClientOriginalExtension();
            $image = time() . rand() . '.' . $extension;

            $img->move(public_path('uploads/testimonial'), $image);

            $testimonial->image = 'uploads/testimonial/' . $image;
        }

        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->feedback = $request->feedback;
        $testimonial->order = $request->order;
        $testimonial->status = $request->status;
        $testimonial->save();
        return redirect ()->route('testimonial.index');
    }
    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('adminDashboard.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png,webp|max:2048',
            'name' => 'required|max:255',
            'designation' => 'nullable|max:255',
            'feedback' => 'nullable|max:255',
            'order' => 'required|numeric',
            'status' => 'required'

        ]);

        $testimonial = Testimonial::findOrFail($id);

        if ($request->hasFile('image')){
            $img = $request->file('image');
            $extension = $img->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $img->move(public_path('uploads/testimonial'), $image);

            $testimonial->image = 'uploads/testimonial/' . $image;
        }
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->feedback = $request->feedback;
        $testimonial->order = $request->order;
        $testimonial->status = $request->status;
        $testimonial->save();
        return redirect ()->route('testimonial.index');
    }

    public function delete($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return redirect()->route('testimonial.index');
    }
}
