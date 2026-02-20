<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
   public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpg,jpeg,png|max:4096'
    ]);

    // Eliminar hero anterior
    $oldImage = Image::where('type', 'hero')->latest()->first();

    if ($oldImage) {
        Storage::disk('public')->delete($oldImage->path);
        $oldImage->delete();
    }

    $path = $request->file('image')->store('images', 'public');

    Image::create([
        'title' => $request->file('image')->getClientOriginalName(),
        'path' => $path,
        'type' => 'hero'
    ]);

    return redirect('/admin')->with('success', 'Imagen Hero actualizada');
}

}
